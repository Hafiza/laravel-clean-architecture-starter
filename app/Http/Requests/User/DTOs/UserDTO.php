<?php

namespace App\Application\User\DTOs;

use App\Http\Requests\User\StoreUserRequest;
use Illuminate\Support\Facades\Hash;

final readonly class CreateUserDTO
{
    public function __construct(
        public string $name,
        public string $email,
        public string $hashedPassword,
    ) {}

    public static function fromRequest(StoreUserRequest $request): self
    {
        return new self(
            $request->string('name'),
            $request->string('email'),
            Hash::make($request->string('password')),
        );
    }
}
