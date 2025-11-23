<?php

namespace App\Filament\Resources\ReminderLogs\Pages;

use App\Filament\Resources\ReminderLogs\ReminderLogResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditReminderLog extends EditRecord
{
    protected static string $resource = ReminderLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
