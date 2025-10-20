<?php

namespace App\Services\Index;

use App\DTO\PaginationDTO;
use App\Interfaces\MechanicShopsInterface;

class IndexMechanicShopsService{

        public function __construct(
        protected MechanicShopsInterface $mechanicShopsInterface
    ) {
    }


  public function handle(PaginationDTO $request)
    {
        $mechanicShop = $this->mechanicShopsInterface->getAllMechanicShopsPaginated($request);

        return $mechanicShop;
    }
}