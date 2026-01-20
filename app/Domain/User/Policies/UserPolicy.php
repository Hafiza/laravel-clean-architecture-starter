<?php

namespace App\Domain\User\Policies;

use App\Domain\User\Models\User;

final class UserPolicy
{
    public function create(User $actor): bool
    {
        return $actor->is_admin === true;
    }
}
