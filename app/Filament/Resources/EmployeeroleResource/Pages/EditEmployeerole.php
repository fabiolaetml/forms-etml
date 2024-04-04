<?php

namespace App\Filament\Resources\EmployeeroleResource\Pages;

use App\Filament\Resources\EmployeeroleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmployeerole extends EditRecord
{
    protected static string $resource = EmployeeroleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
