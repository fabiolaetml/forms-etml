<?php

namespace App\Filament\Resources\EmployeeroleResource\Pages;

use App\Filament\Resources\EmployeeroleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmployeeroles extends ListRecords
{
    protected static string $resource = EmployeeroleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
