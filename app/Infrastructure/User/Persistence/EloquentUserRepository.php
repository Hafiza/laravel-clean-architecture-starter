<?php

namespace App\Infrastructure\User\Persistence;

use App\Application\User\DTOs\CreateUserDTO;
use App\Domain\User\Models\User;
use App\Domain\User\Repositories\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

final class EloquentUserRepository implements UserRepositoryInterface
{
    // public function create(array $attributes): User
    // {
    //     return User::query()->create($attributes);
    // }

       public function create(CreateUserDTO $dto): void
    {
        User::create([
            'name' => $dto->name,
            'email' => $dto->email,
            'password' => Hash::make($dto->password),
        ]);
    }
}
