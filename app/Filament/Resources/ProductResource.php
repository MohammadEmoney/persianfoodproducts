<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

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
                    Select::make('category_id')->relationship('category', 'name')->label('Main Category')->required(),
                    Select::make('categories')
                                ->multiple()
                                ->relationship('categories', 'name')
                                ->label('Other Categories'),
                    Grid::make([
                                    'sm' => 2,
                                    'xl' => 6,
                                ])
                                    ->schema([
                                        Toggle::make('is_visible')->label('Is Visible')->default(1),
                                        Toggle::make('is_featured')->label('Is Special'),
                                    ]),

                ]),
                Card::make()->schema([
                    RichEditor::make('content')
                                 ->label(__('English Description'))
                                 ->disableToolbarButtons([
                                                    'attachFiles',
                                                    'codeBlock',
                                                   ]),
                    RichEditor::make('contents.fa')
                                 ->label(__('Persian Description'))
                                 ->disableToolbarButtons([
                                                    'attachFiles',
                                                    'codeBlock',
                                                   ]),
                    RichEditor::make('contents.it')
                                 ->label(__('Italian Description'))
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
                TextColumn::make('category.name')
                    ->label('Main Category')
                    ->searchable()
                    ->sortable(),
                ToggleColumn::make('is_visible')
                    ->label('Visibelity')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
