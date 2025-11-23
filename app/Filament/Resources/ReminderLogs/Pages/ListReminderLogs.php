<?php

namespace App\Filament\Resources\ReminderLogs\Pages;

use App\Filament\Resources\ReminderLogs\ReminderLogResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListReminderLogs extends ListRecords
{
    protected static string $resource = ReminderLogResource::class;

    protected function getHeaderActions(): array
    {
        // Read-only: no create action
        return [];
    }
}
