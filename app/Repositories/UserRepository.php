<?php

namespace App\Repositories;

use App\User;

interface UserRepository
{
    public function find($id);
    public function add(User $user);
    public function size();
}