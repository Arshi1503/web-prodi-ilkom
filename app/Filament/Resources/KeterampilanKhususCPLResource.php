<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KeterampilanKhususCPLResource\Pages;
use App\Filament\Resources\KeterampilanKhususCPLResource\RelationManagers;
use App\Models\KeterampilanKhususCPL;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KeterampilanKhususCPLResource extends Resource
{
    protected static ?string $model = KeterampilanKhususCPL::class;

    protected static ?string $navigationGroup = 'Akademik';

    protected static ?string $navigationLabel = 'Keterampilan Khusus (CPL)';

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
            'index' => Pages\ListKeterampilanKhususCPLS::route('/'),
            'create' => Pages\CreateKeterampilanKhususCPL::route('/create'),
            'view' => Pages\ViewKeterampilanKhususCPL::route('/{record}'),
            'edit' => Pages\EditKeterampilanKhususCPL::route('/{record}/edit'),
        ];
    }
}