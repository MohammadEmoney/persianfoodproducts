<?php

namespace App\Filament\Resources\AtrributeValueResource\Pages;

use App\Filament\Resources\AtrributeValueResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAtrributeValues extends ListRecords
{
    protected static string $resource = AtrributeValueResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
