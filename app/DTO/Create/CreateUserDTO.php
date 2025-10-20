<?php

namespace App\DTO\Create;

class CreateUserDTO
{
    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $password,
        public readonly ?string $address = null,
        public readonly ?string $phone_number = null,
    ) {}

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'password' => \Illuminate\Support\Facades\Hash::make($this->password),
            'address' => $this->address,
            'phone_number' => $this->phone_number,
        ];
    }
}