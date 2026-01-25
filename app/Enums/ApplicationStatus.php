<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum ApplicationStatus: string implements HasColor, HasLabel
{
    case Pending = 'pending';
    case UnderReview = 'under_review';
    case Approved = 'approved';
    case Rejected = 'rejected';
    case Completed = 'completed';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Pending => __('application.enums.status.pending'),
            self::UnderReview => __('application.enums.status.under_review'),
            self::Approved => __('application.enums.status.approved'),
            self::Rejected => __('application.enums.status.rejected'),
            self::Completed => __('application.enums.status.completed'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Pending => 'warning',
            self::UnderReview => 'primary',
            self::Approved => 'success',
            self::Rejected => 'danger',
            self::Completed => 'gray',
        };
    }
}
