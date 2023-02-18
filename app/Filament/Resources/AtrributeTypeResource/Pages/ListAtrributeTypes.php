<?php

namespace App\Filament\Resources\AtrributeTypeResource\Pages;

use App\Filament\Resources\AtrributeTypeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAtrributeTypes extends ListRecords
{
    protected static string $resource = AtrributeTypeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
