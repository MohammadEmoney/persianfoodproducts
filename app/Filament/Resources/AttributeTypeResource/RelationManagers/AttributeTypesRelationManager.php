<?php

namespace App\Filament\Resources\AttributeTypeResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class AttributeTypesRelationManager extends RelationManager
{
    protected static string $relationship = 'attributeType';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('name')->label('Name')->unique()->required()->reactive()
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')->unique()->label('Slug'),
                    TextInput::make('names.fa')->label('Farsi')->required(),
                    TextInput::make('names.it')->label('Italian')->required(),
                    TextInput::make('input_type')->label('Input Type')->nullable(),
                    TextInput::make('order')->label('Order')->numeric()->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                   ->label('English Name')
                   ->searchable()
                   ->sortable(),
                TextColumn::make('names.fa')
                    ->label(__('Persian Name'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('names.it')
                    ->label(__('Italian Name'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('order')
                    ->label(__('Order'))
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
