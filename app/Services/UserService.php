<?php

namespace App\Services;

use App\Interfaces\UserRepositoryInterface;

class UserService
{

    public function __construct(
        protected UserRepositoryInterface $userRepository
    ) {}

    public function getAllUsers()
    {
        return $this->userRepository->getAllUsers();
    }
}
