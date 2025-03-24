<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisiMisiTujuan1Resource\Pages;
use App\Filament\Resources\VisiMisiTujuan1Resource\RelationManagers;
use App\Models\VisiMisiTujuan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisiMisiTujuan1Resource extends Resource
{
    protected static ?string $model = VisiMisiTujuan::class;

    protected static ?string $navigationGroup = 'Tentang Kami';

    protected static ?string $navigationLabel = 'Visi Misi dan Tujuan';

    protected static ?string $navigationIcon = 'heroicon-o-flag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('visi')
                ->required()
                ->columnSpanFull(),
            Forms\Components\RichEditor::make('misi')
                ->required()
                ->columnSpanFull(),
            Forms\Components\RichEditor::make('tujuan')
                ->required()
                ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('visi')
                ->limit(50),
            Tables\Columns\TextColumn::make('misi')
                ->limit(50),
            Tables\Columns\TextColumn::make('tujuan')
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
            'index' => Pages\ListVisiMisiTujuan1s::route('/'),
            'create' => Pages\CreateVisiMisiTujuan1::route('/create'),
            'view' => Pages\ViewVisiMisiTujuan1::route('/{record}'),
            'edit' => Pages\EditVisiMisiTujuan1::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Visi, Misi dan Tujuan'; 
    }

    public static function getNavigationLabel(): string
    {
        return 'Visi, Misi dan Tujuan'; 
    }
}
