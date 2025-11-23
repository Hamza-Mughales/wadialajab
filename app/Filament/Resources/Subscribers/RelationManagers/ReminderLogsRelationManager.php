<?php

namespace App\Filament\Resources\Subscribers\RelationManagers;

use Filament\Actions\ViewAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class ReminderLogsRelationManager extends RelationManager
{
    protected static string $relationship = 'reminderLogs';

    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return __('reminder_log.plural_label');
    }

    public function form(Schema $schema): Schema
    {
        // Read-only: no form needed
        return $schema->components([]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('message')
            ->columns([
                TextColumn::make('message')
                    ->label(__('reminder_log.fields.message'))
                    ->limit(50)
                    ->tooltip(fn ($record) => $record->message),

                TextColumn::make('status')
                    ->label(__('reminder_log.fields.status'))
                    ->badge()
                    ->colors([
                        'success' => 'sent',
                        'danger'  => 'failed',
                    ]),

                TextColumn::make('created_at')
                    ->label(__('reminder_log.fields.created_at'))
                    ->dateTime('Y-m-d H:i'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                // Read-only: no create
            ])
            ->recordActions([
                ViewAction::make(),
            ])
            ->toolbarActions([
                // Read-only: no bulk actions
            ]);
    }
}
