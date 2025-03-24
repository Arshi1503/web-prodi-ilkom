<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SikapCPLResource\Pages;
use App\Filament\Resources\SikapCPLResource\RelationManagers;
use App\Models\SikapCPL;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SikapCPLResource extends Resource
{
    protected static ?string $model = SikapCPL::class;

    protected static ?string $navigationGroup = 'Akademik';

    protected static ?string $navigationLabel = 'Sikap (CPL)';

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('indikator')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('indikator')
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
            'index' => Pages\ListSikapCPLS::route('/'),
            'create' => Pages\CreateSikapCPL::route('/create'),
            'view' => Pages\ViewSikapCPL::route('/{record}'),
            'edit' => Pages\EditSikapCPL::route('/{record}/edit'),
        ];
    }
}
