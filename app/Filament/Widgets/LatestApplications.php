<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Applications\ApplicationResource;
use App\Models\Application;
use Filament\Actions\Action;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

class LatestApplications extends TableWidget
{
    protected static ?int $sort = 3;

    protected int|string|array $columnSpan = 'full';

    protected function getTableHeading(): ?string
    {
        return __('dashboard.latest_applications.heading');
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Application::query()->latest()->limit(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('dashboard.latest_applications.columns.date'))
                    ->dateTime('Y-m-d')
                    ->sortable()
                    ->description(fn (Application $record): string => $record->created_at->diffForHumans()),
                Tables\Columns\TextColumn::make('name')
                    ->label(__('dashboard.latest_applications.columns.name'))
                    ->searchable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('status')
                    ->label(__('dashboard.latest_applications.columns.status'))
                    ->badge(),
            ])
            ->recordActions([
                Action::make('view')
                    ->label(__('dashboard.latest_applications.actions.view'))
                    ->url(fn (Application $record): string => ApplicationResource::getUrl('view', ['record' => $record])),
            ]);
    }
}
