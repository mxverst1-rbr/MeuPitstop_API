<?php

namespace App\Interfaces;

use App\DTO\Create\CreateUserDTO;


interface UserRepositoryInterface
{
    public function getAllUsers();

    public function createUser(CreateUserDTO $userDTO);
}
