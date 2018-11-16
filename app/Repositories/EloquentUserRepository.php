<?php

namespace App\Repositories;

use App\User;

class EloquentUserRepository implements UserRepository
{
    public function find($id)
    {
        return User::find($id);
    }

    public function add($user)
    {
        User::create($user);
    }

    public function size()
    {
        return User::count();
    }
}