<?php

namespace Tests\Unit\Application\User;

use Tests\TestCase;
use App\Application\User\Handlers\CreateUserHandler;
use App\Application\User\DTOs\CreateUserDTO;
use App\Domain\User\Repositories\UserRepositoryInterface;
use Mockery;


class CreateUserHandlerTest extends TestCase
{
    public function test_it_creates_user_through_repository(): void
    {
        $repository = Mockery::mock(UserRepositoryInterface::class);

        $repository
            ->shouldReceive('create')
            ->once()
            ->with(Mockery::type(CreateUserDTO::class));

        $handler = new CreateUserHandler($repository);

        $dto = new CreateUserDTO(
            name: 'Test User',
            email: 'test@example.com',
            password: 'StrongPassword123'
        );

        $handler->handle($dto);
    }

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }
}
