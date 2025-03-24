<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TracerStudyResource\Pages;
use App\Filament\Resources\TracerStudyResource\RelationManagers;
use App\Models\TracerStudy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TracerStudyResource extends Resource
{
    protected static ?string $model = TracerStudy::class;

    protected static ?string $navigationGroup = 'Akademik';

    protected static ?string $navigationLabel = 'Tracer Study';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('gambar1')->required(),
                Forms\Components\FileUpload::make('gambar2')->required(),
                Forms\Components\FileUpload::make('gambar3')->required(),
                Forms\Components\FileUpload::make('gambar4')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar1'),
                Tables\Columns\ImageColumn::make('gambar2'),
                Tables\Columns\ImageColumn::make('gambar3'),
                Tables\Columns\ImageColumn::make('gambar4'),
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
            'index' => Pages\ListTracerStudies::route('/'),
            'create' => Pages\CreateTracerStudy::route('/create'),
            'view' => Pages\ViewTracerStudy::route('/{record}'),
            'edit' => Pages\EditTracerStudy::route('/{record}/edit'),
        ];
    }
}
