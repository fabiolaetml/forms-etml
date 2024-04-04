<?php

namespace App\Filament\Resources\CompanyunitResource\Pages;

use App\Filament\Resources\CompanyunitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanyunits extends ListRecords
{
    protected static string $resource = CompanyunitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
