<?php

namespace App\Services\Update;

use App\DTO\Update\UpdateMechanicShopsDTO;
use App\Interfaces\MechanicShopsInterface;

class UpdateMechanicShopsService{

        public function __construct(
        protected MechanicShopsInterface $mechanicShopsInterface
    ) {
    }
  public function handle(UpdateMechanicShopsDTO $mechanicShopDTO)
    {
        $mechanicShop = $this->mechanicShopsInterface->updateMechanicShop($mechanicShopDTO);

        return $mechanicShop;
    }
}