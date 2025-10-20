<?php

namespace App\Services\Show;

use App\Interfaces\MechanicShopsInterface;

class ShowMechanicShopsService{

        public function __construct(
        protected MechanicShopsInterface $mechanicShopsInterface
    ) {
    }
  public function handle(int $mechanicShopId)
    {
        $mechanicShop = $this->mechanicShopsInterface->getMechanicShopById($mechanicShopId);

        return $mechanicShop;
    }
}