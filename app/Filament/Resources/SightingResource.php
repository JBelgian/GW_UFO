<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SightingResource\Pages;
use App\Filament\Resources\SightingResource\RelationManagers;
use App\Models\Sighting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SightingResource extends Resource
{
    protected static ?string $model = Sighting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\DateTimePicker::make('date_time')
                    ->required()
                    ->maxDate(now()),
                Forms\Components\TextInput::make('location')
                    ->required(),
                Forms\Components\TextInput::make('description')
                    ->required(),
                Forms\Components\Select::make('category')
                    ->relationship('categoryRelation', 'description')
                    ->searchable()
                    ->preload()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
                    ->sortable(),
                Tables\Columns\TextColumn::make('date_time')
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('categoryRelation.description')
                    ->searchable()
                    ->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListSightings::route('/'),
            'create' => Pages\CreateSighting::route('/create'),
            'edit' => Pages\EditSighting::route('/{record}/edit'),
        ];
    }
}
