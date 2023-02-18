<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoriesRelationManager extends RelationManager
{
    protected static string $relationship = 'categories';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('name')->label('Name')->required()->reactive()
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')->label('Slug'),
                    TextInput::make('names.fa')->label('Farsi')->required(),
                    TextInput::make('names.it')->label('Italian')->required(),
                    Select::make('parent_id')->relationship('parent', 'name'),
                    RichEditor::make('description')
                                 ->label(__('Description'))
                                 ->disableToolbarButtons([
                                                    'attachFiles',
                                                    'codeBlock',
                                                   ]),
                ])
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
                TextColumn::make('parent.name')
                        ->label('Parent Name')
                        ->searchable()
                        ->sortable(),
                ToggleColumn::make('is_active')
                            ->label('Visibelity')
                            ->sortable(),
                TextColumn::make('updated_at')
                        // ->formatStateUsing(function ($state) {
                        //     return jdate($state)->format('j F Y');
                        // })
                        ->label(__('admin.updated_at'))
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
