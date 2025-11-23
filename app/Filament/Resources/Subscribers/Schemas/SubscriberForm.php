<?php

namespace App\Filament\Resources\Subscribers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SubscriberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('full_name')
                    ->label(__('subscriber.fields.full_name'))
                    ->required()
                    ->maxLength(255),

                TextInput::make('phone')
                    ->label(__('subscriber.fields.phone'))
                    ->required()
                    ->maxLength(50),

                TextInput::make('amount')
                    ->label(__('subscriber.fields.amount'))
                    ->numeric()
                    ->required()
                    ->prefix('SAR'),

                TextInput::make('email')
                    ->label(__('subscriber.fields.email'))
                    ->email()
                    ->maxLength(255)
                    ->nullable(),
            ]);
    }
}
