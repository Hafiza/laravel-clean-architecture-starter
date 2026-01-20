<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use Illuminate\Http\JsonResponse;
use App\Application\User\Handlers\CreateUserHandler;
use App\Application\User\DTOs\CreateUserDTO;


final class UserController extends Controller
{
    public function store(StoreUserRequest $request, CreateUserHandler $handler
): JsonResponse
    {
         $user = $handler->handle(
        CreateUserDTO::fromRequest($request)
      );

          return response()->json($user, 201);

        // Business logic will be added in Day 5
        // return response()->json([
        //     'message' => 'User request accepted',
        // ], 202);
    }
}
