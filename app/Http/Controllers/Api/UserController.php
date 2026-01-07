<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use Illuminate\Http\JsonResponse;

final class UserController extends Controller
{
    public function store(StoreUserRequest $request): JsonResponse
    {
        // Business logic will be added in Day 5
        return response()->json([
            'message' => 'User request accepted',
        ], 202);
    }
}
