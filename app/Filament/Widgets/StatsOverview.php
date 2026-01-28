<?php

namespace App\Filament\Widgets;

use App\Enums\ApplicationStatus;
use App\Models\Application;
use App\Models\Subscriber;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make(__('dashboard.stats.applications.label'), Application::count())
                ->description(__('dashboard.stats.applications.description'))
                ->descriptionIcon('heroicon-m-inbox-arrow-down')
                ->color('primary')
                ->chart([7, 2, 10, 3, 15, 4, 17]),

            Stat::make(__('dashboard.stats.pending_applications.label'), Application::where('status', ApplicationStatus::Pending)->count())
                ->description(__('dashboard.stats.pending_applications.description'))
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),

            Stat::make(__('dashboard.stats.subscribers.label'), Subscriber::count())
                ->description(__('dashboard.stats.subscribers.description'))
                ->descriptionIcon('heroicon-m-user-group')
                ->color('success'),
        ];
    }
}
