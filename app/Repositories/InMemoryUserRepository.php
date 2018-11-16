<?php

namespace App\Repositories;

use App\User;

class InMemoryUserRepository implements UserRepository
{
    private $users;

    public function find($id)
    {
        return $this->users[$id];
    }

    public function add($userData)
    {
        $index = $this->users->size();
        $this->users[$index] = $userData;
    }

    public function size()
    {
        return count($users);
    }
}