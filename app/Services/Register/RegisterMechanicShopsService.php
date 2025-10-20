<?php

namespace App\Services\Register;

use App\DTO\Create\CreateMechanicShopsDTO;
use App\Interfaces\MechanicShopsInterface;

class RegisterMechanicShopsService{

        public function __construct(
        protected MechanicShopsInterface $mechanicShopsInterface
    ) {
    }


  public function handle(CreateMechanicShopsDTO $mechanicShopDTO)
    {
        $mechanicShop = $this->mechanicShopsInterface->createMechanicShop($mechanicShopDTO);

        return $mechanicShop;
    }
}