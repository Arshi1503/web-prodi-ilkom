<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KarirResource\Pages;
use App\Filament\Resources\KarirResource\RelationManagers;
use App\Models\Karir;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KarirResource extends Resource
{
    protected static ?string $model = Karir::class;

    protected static ?string $navigationGroup = 'Tentang Kami';

    protected static ?string $navigationLabel = 'Karir';

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('teks')
                ->columnSpanFull()
                ->nullable()
                ->helperText('Teks singkat peluang karir (opsional). Kosongkan jika tidak ada informasi tambahan.'),
            Forms\Components\TextInput::make('sektor'),
            Forms\Components\RichEditor::make('deskripsi')
                ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('teks')
                ->limit(50),
            Tables\Columns\TextColumn::make('sektor'),
            Tables\Columns\TextColumn::make('deskripsi')
                ->limit(50),
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
            'index' => Pages\ListKarirs::route('/'),
            'create' => Pages\CreateKarir::route('/create'),
            'view' => Pages\ViewKarir::route('/{record}'),
            'edit' => Pages\EditKarir::route('/{record}/edit'),
        ];
    }
}
