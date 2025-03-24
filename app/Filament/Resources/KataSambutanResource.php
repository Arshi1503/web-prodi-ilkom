<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KataSambutanResource\Pages;
use App\Filament\Resources\KataSambutanResource\RelationManagers;
use App\Models\PimpinanStaff;
use Filament\Forms;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KataSambutanResource extends Resource
{
    protected static ?string $model = PimpinanStaff::class;

    protected static ?string $navigationGroup = 'Beranda';

    protected static ?string $navigationLabel = 'Kata Sambutan';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('foto')->required(),
                Forms\Components\Select::make('status')
                    ->options([
                        'Kepala Program Studi Administrasi Bisnis' => 'Kepala Program Studi Administrasi Bisnis',
                    ])
                    ->default('Berita')
                    ->disabled()
                    ->required(),
                Forms\Components\TextInput::make('nama')->required(),
                Forms\Components\RichEditor::make('kata_sambutan')
                ->visible(fn (Get $get) => $get('status') === 'Kepala Program Studi Administrasi Bisnis')
                ->required(fn (Get $get): bool => $get('status') === 'Kepala Program Studi Administrasi Bisnis')
                ->columnSpanFull(),
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
                Tables\Filters\SelectFilter::make('status')
                ->options([
                    'Kepala Program Studi Administrasi Bisnis' => 'Kepala Program Studi Administrasi Bisnis',
                ])
                ->default('Kepala Program Studi Administrasi Bisnis')
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
            'index' => Pages\ListKataSambutans::route('/'),
            'create' => Pages\CreateKataSambutan::route('/create'),
            'view' => Pages\ViewKataSambutan::route('/{record}'),
            'edit' => Pages\EditKataSambutan::route('/{record}/edit'),
        ];
    }
}
