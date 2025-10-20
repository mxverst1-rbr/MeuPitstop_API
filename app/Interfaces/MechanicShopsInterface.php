<?php

namespace App\Interfaces;

use App\DTO\Create\CreateMechanicShopsDTO;
use App\DTO\PaginationDTO;
use App\DTO\Update\UpdateMechanicShopsDTO;



interface MechanicShopsInterface
{
    public function getAllMechanicShopsPaginated(PaginationDTO $paginationDTO);
    public function createMechanicShop(CreateMechanicShopsDTO $mechanicShopDTO);
    public function updateMechanicShop(UpdateMechanicShopsDTO $mechanicShopDTO);
    public function getMechanicShopById(int $mechanicShopId);
    public function destroyMechanicShop(int $mechanicShopId);
}
