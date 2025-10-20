<?php

namespace App\Repositories\Eloquent;



use App\DTO\Create\CreateUserDTO;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;



class UserRepository implements UserRepositoryInterface
{

    public function getAllUsers()
    {

        return User::all();
    }

    public function createUser(CreateUserDTO $userDTO)
    {
        return User::create($userDTO->toArray());
    }

}
