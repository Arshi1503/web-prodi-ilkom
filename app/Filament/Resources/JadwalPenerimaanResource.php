<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalPenerimaanResource\Pages;
use App\Filament\Resources\JadwalPenerimaanResource\RelationManagers;
use App\Models\JadwalPenerimaan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JadwalPenerimaanResource extends Resource
{
    protected static ?string $model = JadwalPenerimaan::class;

    protected static ?string $navigationGroup = 'Pendaftaran';

    protected static ?string $navigationLabel = 'Jadwal Penerimaan';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('teks')
                    ->columnSpanFull()
                    ->helperText('Teks singkat jadwal penerimaan (opsional). Kosongkan jika tidak ada informasi tambahan.'),
                Forms\Components\DatePicker::make('pendaftaran_sampai_dengan')->required(),
                Forms\Components\DatePicker::make('tes')->required(),
                Forms\Components\DatePicker::make('pengumuman_hasil_tes')->required(),
                Forms\Components\DatePicker::make('masa_orientasi')->required(),
                Forms\Components\DatePicker::make('perkuliahan_perdana')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('teks')
                    ->limit(50),
                Tables\Columns\TextColumn::make('pendaftaran_sampai_dengan')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tes')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pengumuman_hasil_tes')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('masa_orientasi')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('perkuliahan_perdana')
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
            'index' => Pages\ListJadwalPenerimaans::route('/'),
            'create' => Pages\CreateJadwalPenerimaan::route('/create'),
            'view' => Pages\ViewJadwalPenerimaan::route('/{record}'),
            'edit' => Pages\EditJadwalPenerimaan::route('/{record}/edit'),
        ];
    }
}