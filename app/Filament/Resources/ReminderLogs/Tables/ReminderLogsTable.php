<?php

namespace App\Filament\Resources\ReminderLogs\Tables;

use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ReminderLogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('subscriber.name')
                    ->label(__('reminder_log.fields.subscriber_name'))
                    ->searchable(),

                TextColumn::make('subscriber.phone')
                    ->label(__('reminder_log.fields.phone'))
                    ->searchable(),

                TextColumn::make('message')
                    ->label(__('reminder_log.fields.message'))
                    ->limit(50)
                    ->tooltip(fn ($record) => $record->message),

                TextColumn::make('status')
                    ->label(__('reminder_log.fields.status'))
                    ->badge()
                    ->colors([
                        'success' => 'sent',
                        'danger' => 'failed',
                    ]),

                TextColumn::make('created_at')
                    ->label(__('reminder_log.fields.created_at'))
                    ->dateTime('Y-m-d H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
            ])
            ->toolbarActions([
                // Read-only: no bulk actions
            ]);
    }
}
