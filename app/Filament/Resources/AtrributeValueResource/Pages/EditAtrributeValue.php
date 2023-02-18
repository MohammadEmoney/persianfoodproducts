<?php

namespace App\Filament\Resources\AtrributeValueResource\Pages;

use App\Filament\Resources\AtrributeValueResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAtrributeValue extends EditRecord
{
    protected static string $resource = AtrributeValueResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
