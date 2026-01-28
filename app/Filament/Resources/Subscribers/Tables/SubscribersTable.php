<?php

namespace App\Filament\Resources\Subscribers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SubscribersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('subscriber.fields.name'))
                    ->searchable()
                    ->sortable(),

                TextColumn::make('phone')
                    ->label(__('subscriber.fields.phone'))
                    ->searchable(),

                TextColumn::make('amount')
                    ->label(__('subscriber.fields.amount'))
                    ->money('sar', true),

                TextColumn::make('email')
                    ->label(__('subscriber.fields.email'))
                    ->toggleable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
