<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KampusResource\Pages;
use App\Filament\Resources\KampusResource\RelationManagers;
use App\Models\Kampus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KampusResource extends Resource
{
    protected static ?string $model = Kampus::class;

    protected static ?string $navigationGroup = 'Tentang Kami';

    protected static ?string $navigationLabel = 'Daftar Kampus';

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama'),
                Forms\Components\FileUpload::make('gambar'),
                Forms\Components\RichEditor::make('deskripsi')
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('alamat')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('nomor')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\ImageColumn::make('gambar'),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->limit(50),
                Tables\Columns\TextColumn::make('alamat')
                    ->limit(50),
                Tables\Columns\TextColumn::make('nomor'),
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
            'index' => Pages\ListKampuses::route('/'),
            'create' => Pages\CreateKampus::route('/create'),
            'view' => Pages\ViewKampus::route('/{record}'),
            'edit' => Pages\EditKampus::route('/{record}/edit'),
        ];
    }
}
