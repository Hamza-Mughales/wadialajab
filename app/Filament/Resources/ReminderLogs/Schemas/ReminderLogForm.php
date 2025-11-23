<?php

namespace App\Filament\Resources\ReminderLogs\Schemas;

use Filament\Schemas\Schema;

class ReminderLogForm
{
    public static function configure(Schema $schema): Schema
    {
        // Read-only: no form needed
        return $schema->components([]);
    }
}
