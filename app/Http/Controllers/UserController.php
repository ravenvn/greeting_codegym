<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
// use App\Repositories\UserRepository;

class UserController extends Controller
{
    public function list()
    {
        $users = User::orderBy('name')->get();

        return view('users', compact('users'));
    }

    // private $repository;

    // public function __construct(UserRepository $repository)
    // {
    //     $this->repository = $repository;
    // }

    // public function show($id)
    // {
    //     $user = $this->repository->find($id);

    //     return $user;
    // }

    // public function store($userData)
    // {
    //     $this->repository->add($userData);
    // }
}
