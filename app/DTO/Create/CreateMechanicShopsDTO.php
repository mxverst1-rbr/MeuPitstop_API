<?php

namespace App\DTO\Create;

class CreateMechanicShopsDTO
{
    public function __construct(
        public readonly string $name,
        public readonly int $user_id,
        public readonly string $phone,
        public readonly string $email,
        public readonly string $address,
        public readonly string $city,
        public readonly string $state,
        public readonly string $zip_code,
        public readonly string $registration_number,
        public readonly string $opening_hours,
        public readonly ?float $rating = null,

    ) {
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'user_id' => $this->user_id,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'zip_code' => $this->zip_code,
            'registration_number' => $this->registration_number,
            'opening_hours' => $this->opening_hours,
            'rating' => $this->rating,

        ];
    }
}
