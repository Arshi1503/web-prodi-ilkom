<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PimpinanStaffResource\Pages;
use App\Filament\Resources\PimpinanStaffResource\RelationManagers;
use App\Services\GoogleScholarService;
use App\Models\PimpinanStaff;
use Filament\Forms;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PimpinanStaffResource extends Resource
{
    protected static ?string $model = PimpinanStaff::class;

    protected static ?string $navigationGroup = 'Tentang Kami';

    protected static ?string $navigationLabel = 'Pimpinan dan Staff';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public function getScholarArticlesProperty()
    {
        $service = app(GoogleScholarService::class);
        return $service->searchArticles($this->record->nama);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('foto')->required(),
                Forms\Components\Select::make('status')
                    ->options([
                        'Kepala Program Studi Ilmu Komunikasi' => 'Kepala Program Studi Ilmu Komunikasi',
                        'Dosen' => 'Dosen',
                        'Staff' => 'Staff',
                    ])
                    ->reactive()
                    ->required(),
                Forms\Components\TextInput::make('nama')->required(),
                Forms\Components\RichEditor::make('kata_sambutan')
                ->visible(fn (Get $get) => $get('status') === 'Kepala Program Studi Ilmu Komunikasi') 
                ->required(fn (Get $get): bool => $get('status') === 'Kepala Program Studi Ilmu Komunikasi')
                ->columnSpanFull(),
                Forms\Components\TextInput::make('id_google_scholar'),
                Forms\Components\TextInput::make('nidn'),
                Forms\Components\TextInput::make('email'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('kata_sambutan')
                    ->limit(50),
                Tables\Columns\TextColumn::make('id_google_scholar'),
                Tables\Columns\TextColumn::make('nidn'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPimpinanStaff::route('/'),
            'create' => Pages\CreatePimpinanStaff::route('/create'),
            'view' => Pages\ViewPimpinanStaff::route('/{record}'),
            'edit' => Pages\EditPimpinanStaff::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Pimpinan dan Staff'; 
    }

    public static function getNavigationLabel(): string
    {
        return 'Pimpinan dan Staff'; 
    }

    public static function mutateFormDataBeforeCreate(array $data): array
    {
        $data['id_google_scholar'] = self::extractScholarId($data['id_google_scholar'] ?? null);
        return $data;
    }

    public static function mutateFormDataBeforeSave(array $data): array
    {
        $data['id_google_scholar'] = self::extractScholarId($data['id_google_scholar'] ?? null);
        return $data;
    }

    private static function extractScholarId(?string $input): ?string
    {
        if (!$input) return null;

        // Kalau input tidak mengandung 'http', anggap itu sudah ID
        if (!str_contains($input, 'http')) {
            return $input;
        }

        // Ambil ID dari URL
        parse_str(parse_url($input, PHP_URL_QUERY), $queryParams);
        return $queryParams['user'] ?? null;
    }
}
