<?php

namespace App\Services\Destroy;

use App\Interfaces\MechanicShopsInterface;

class DestroyMechanicShopsService{

        public function __construct(
        protected MechanicShopsInterface $mechanicShopsInterface
    ) {
    }
  public function handle(int $id)
    {
        $mechanicShop = $this->mechanicShopsInterface->destroyMechanicShop($id);

        return $mechanicShop;
    }
}