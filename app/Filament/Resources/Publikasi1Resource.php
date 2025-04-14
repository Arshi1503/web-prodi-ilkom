<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Publikasi1Resource\Pages;
use App\Filament\Resources\Publikasi1Resource\RelationManagers;
use App\Models\Publikasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class Publikasi1Resource extends Resource
{
    protected static ?string $model = Publikasi::class;

    protected static ?string $navigationGroup = 'Publikasi';

    protected static ?string $navigationLabel = 'Publikasi';

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul'),
                Forms\Components\FileUpload::make('gambar')->required(),
                Forms\Components\Select::make('status')
                ->options([
                    'Artikel' => 'Artikel',
                    'Berita' => 'Berita',
                    'Kegiatan' => 'Kegiatan',
                ])
                ->required(),
                Forms\Components\DatePicker::make('waktu')->required(),
                Forms\Components\RichEditor::make('deskripsi')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->limit(50),
                Tables\Columns\ImageColumn::make('gambar'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->limit(50),
                Tables\Columns\TextColumn::make('waktu')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListPublikasi1s::route('/'),
            'create' => Pages\CreatePublikasi1::route('/create'),
            'view' => Pages\ViewPublikasi1::route('/{record}'),
            'edit' => Pages\EditPublikasi1::route('/{record}/edit'),
        ];
    }
}
