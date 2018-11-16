<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Repositories\EloquentUserRepository;
use App\Http\Controllers\UserController;
use App\User;

class UserControllerTest extends TestCase
{
    public function testShow()
    {
        factory(User::class, 10)->create();
        // $repository = new EloquentUserRepository();
        // $repository = new InMemoryUserRepository();
        // $controller = new UserController($repository);
        // $user = $controller->show(1);
        // $this->assertInstanceOf('\App\User', $user);
    }

    // public function testStore()
    // {
    //     $repository = new EloquentUserRepository();
    //     $oldSize = $repository->size();
    //     $controller = new UserController($repository);
    //     $user = factory(User::class)->make()->toArray();
    //     $controller->store($user);
    //     $newSize = $repository->size();
    //     $this->assertEquals($newSize, $oldSize + 1);
    // }
}