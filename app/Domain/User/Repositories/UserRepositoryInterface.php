<?php

namespace App\Domain\User\Repositories;

use App\Domain\User\Models\User;
 

interface UserRepositoryInterface
{
    public function create(array $attributes): User;
}
