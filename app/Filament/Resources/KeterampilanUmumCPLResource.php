<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KeterampilanUmumCPLResource\Pages;
use App\Filament\Resources\KeterampilanUmumCPLResource\RelationManagers;
use App\Models\KeterampilanUmumCPL;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KeterampilanUmumCPLResource extends Resource
{
    protected static ?string $model = KeterampilanUmumCPL::class;

    protected static ?string $navigationGroup = 'Akademik';

    protected static ?string $navigationLabel = 'Keterampilan Umum (CPL)';

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
            'index' => Pages\ListKeterampilanUmumCPLS::route('/'),
            'create' => Pages\CreateKeterampilanUmumCPL::route('/create'),
            'view' => Pages\ViewKeterampilanUmumCPL::route('/{record}'),
            'edit' => Pages\EditKeterampilanUmumCPL::route('/{record}/edit'),
        ];
    }
}
