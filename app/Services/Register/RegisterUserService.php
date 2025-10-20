<?php

namespace App\Register\Services;

use App\DTO\Create\CreateUserDTO;
use App\Interfaces\UserRepositoryInterface;

class RegisterUserService{

        public function __construct(
        protected UserRepositoryInterface $userRepositoryInterface
    ) {
    }


  public function handle(CreateUserDTO $userDTO)
    {
        $user = $this->userRepositoryInterface->createUser($userDTO);

        return $user;
    }
}