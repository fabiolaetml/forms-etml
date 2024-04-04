<?php

namespace App\Filament\Resources\ExitInterviewResource\Pages;

use App\Filament\Resources\ExitInterviewResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExitInterview extends EditRecord
{
    protected static string $resource = ExitInterviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
