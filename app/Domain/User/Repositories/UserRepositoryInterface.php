<?php

namespace App\Domain\User\Repositories;


use App\Domain\User\Models\User;
use App\Application\User\DTOs\CreateUserDTO;

 

interface UserRepositoryInterface
{
   // public function create(array $attributes): User;
       public function create(CreateUserDTO $dto): void;

}
