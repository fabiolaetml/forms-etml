<?php

namespace App\Filament\Resources\CompanyunitResource\Pages;

use App\Filament\Resources\CompanyunitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyunit extends EditRecord
{
    protected static string $resource = CompanyunitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
