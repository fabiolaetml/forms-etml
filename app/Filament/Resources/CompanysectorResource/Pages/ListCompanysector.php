<?php

namespace App\Filament\Resources\CompanysectorResource\Pages;

use App\Filament\Resources\CompanysectorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanysector extends ListRecords
{
    protected static string $resource = CompanysectorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
