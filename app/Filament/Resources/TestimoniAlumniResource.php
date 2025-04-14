<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimoniAlumniResource\Pages;
use App\Filament\Resources\TestimoniAlumniResource\RelationManagers;
use App\Models\TestimoniAlumni;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestimoniAlumniResource extends Resource
{
    protected static ?string $model = TestimoniAlumni::class;

    protected static ?string $navigationGroup = 'Akademik';

    protected static ?string $navigationLabel = 'Testimoni Alumni';

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-ellipsis';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama'),
                Forms\Components\FileUpload::make('foto'),
                Forms\Components\RichEditor::make('teks')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\ImageColumn::make('foto'),
                Tables\Columns\TextColumn::make('teks')
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
            'index' => Pages\ListTestimoniAlumnis::route('/'),
            'create' => Pages\CreateTestimoniAlumni::route('/create'),
            'view' => Pages\ViewTestimoniAlumni::route('/{record}'),
            'edit' => Pages\EditTestimoniAlumni::route('/{record}/edit'),
        ];
    }
}
