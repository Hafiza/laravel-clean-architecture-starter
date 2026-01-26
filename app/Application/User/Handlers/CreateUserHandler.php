<?php

namespace App\Application\User\Handlers;

use App\Application\User\DTOs\CreateUserDTO;
use App\Domain\User\Repositories\UserRepositoryInterface;
use App\Domain\User\Models\User;

final class CreateUserHandler
{
    public function __construct(
        private UserRepositoryInterface $repository
    ) {}

    public function handle(CreateUserDTO $dto): void
    {
        $this->repository->create($dto);
    }
}

