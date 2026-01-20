<?php

namespace App\Infrastructure\User\Persistence;

use App\Domain\User\Repositories\UserRepositoryInterface;
use App\Domain\User\Models\User;

final class EloquentUserRepository implements UserRepositoryInterface
{
    public function create(array $attributes): User
    {
        return User::query()->create($attributes);
    }
}
