<?php

namespace App\Application\User\Handlers;

use App\Application\User\DTOs\CreateUserDTO;
use App\Domain\User\Repositories\UserRepositoryInterface;
use App\Domain\User\Models\User;

final class CreateUserHandler
{
    public function __construct(
        private UserRepositoryInterface $users
    ) {}

    public function handle(CreateUserDTO $dto): User
    {
        return $this->users->create([
            'name'     => $dto->name,
            'email'    => $dto->email,
            'password' => $dto->hashedPassword,
        ]);
    }
}
