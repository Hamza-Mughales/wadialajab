<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\ReminderLog;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;

class ReminderLogPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:ReminderLog');
    }

    public function view(AuthUser $authUser, ReminderLog $reminderLog): bool
    {
        return $authUser->can('View:ReminderLog');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:ReminderLog');
    }

    public function update(AuthUser $authUser, ReminderLog $reminderLog): bool
    {
        return $authUser->can('Update:ReminderLog');
    }

    public function delete(AuthUser $authUser, ReminderLog $reminderLog): bool
    {
        return $authUser->can('Delete:ReminderLog');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:ReminderLog');
    }

    public function restore(AuthUser $authUser, ReminderLog $reminderLog): bool
    {
        return $authUser->can('Restore:ReminderLog');
    }

    public function forceDelete(AuthUser $authUser, ReminderLog $reminderLog): bool
    {
        return $authUser->can('ForceDelete:ReminderLog');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:ReminderLog');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:ReminderLog');
    }

    public function replicate(AuthUser $authUser, ReminderLog $reminderLog): bool
    {
        return $authUser->can('Replicate:ReminderLog');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:ReminderLog');
    }
}
