<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CapaianPembelajaranResource\Pages;
use App\Filament\Resources\CapaianPembelajaranResource\RelationManagers;
use App\Models\CapaianPembelajaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CapaianPembelajaranResource extends Resource
{
    protected static ?string $model = CapaianPembelajaran::class;

    protected static ?string $navigationGroup = 'Akademik';

    protected static ?string $navigationLabel = 'Capaian Pembelajaran';

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('teks')
                    ->columnSpanFull()
                    ->nullable()
                    ->helperText('Teks singkat capaian pembelajaran lulusan (opsional). Kosongkan jika tidak ada informasi tambahan.'),
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
            'index' => Pages\ListCapaianPembelajarans::route('/'),
            'create' => Pages\CreateCapaianPembelajaran::route('/create'),
            'view' => Pages\ViewCapaianPembelajaran::route('/{record}'),
            'edit' => Pages\EditCapaianPembelajaran::route('/{record}/edit'),
        ];
    }
}
