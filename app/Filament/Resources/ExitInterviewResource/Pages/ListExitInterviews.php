<?php

namespace App\Filament\Resources\ExitInterviewResource\Pages;

use App\Filament\Resources\ExitInterviewResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExitInterviews extends ListRecords
{
    protected static string $resource = ExitInterviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
