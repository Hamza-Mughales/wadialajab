<?php

namespace App\Filament\Resources\ReminderLogs;

use App\Filament\Resources\ReminderLogs\Pages\ListReminderLogs;
use App\Filament\Resources\ReminderLogs\Pages\ViewReminderLog;
use App\Filament\Resources\ReminderLogs\Schemas\ReminderLogForm;
use App\Filament\Resources\ReminderLogs\Tables\ReminderLogsTable;
use App\Models\ReminderLog;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ReminderLogResource extends Resource
{
    protected static ?string $model = ReminderLog::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChatBubbleLeftRight;

    public static function getNavigationLabel(): string
    {
        return __('reminder_log.navigation_label');
    }

    public static function getModelLabel(): string
    {
        return __('reminder_log.label');
    }

    public static function getPluralModelLabel(): string
    {
        return __('reminder_log.plural_label');
    }

    public static function form(Schema $schema): Schema
    {
        return ReminderLogForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReminderLogsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListReminderLogs::route('/'),
            'view' => ViewReminderLog::route('/{record}'),
        ];
    }
}
