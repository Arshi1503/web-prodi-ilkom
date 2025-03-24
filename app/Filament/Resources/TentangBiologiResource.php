<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TentangBiologiResource\Pages;
use App\Filament\Resources\TentangBiologiResource\RelationManagers;
use App\Models\Tentang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TentangBiologiResource extends Resource
{
    protected static ?string $model = Tentang::class;

    protected static ?string $navigationGroup = 'Beranda';

    protected static ?string $navigationLabel = 'Tentang Administrasi Bisnis';

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('thumbnail')->required(),
                Forms\Components\RichEditor::make('deskripsi')
                        ->required()
                        ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail'),
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
            'index' => Pages\ListTentangBiologis::route('/'),
            'create' => Pages\CreateTentangBiologi::route('/create'),
            'view' => Pages\ViewTentangBiologi::route('/{record}'),
            'edit' => Pages\EditTentangBiologi::route('/{record}/edit'),
        ];
    }
}
