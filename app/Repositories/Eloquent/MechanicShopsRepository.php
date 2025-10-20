<?php

namespace App\Repositories\Eloquent;



use App\DTO\Create\CreateMechanicShopsDTO;
use App\DTO\PaginationDTO;
use App\DTO\Update\UpdateMechanicShopsDTO;
use App\Interfaces\MechanicShopsInterface;
use App\Models\MechanicShop;




class MechanicShopsRepository implements MechanicShopsInterface
{

    public function getAllMechanicShopsPaginated(PaginationDTO $paginationDTO)
    {
        return MechanicShop::paginate($paginationDTO->limit, ['*'], 'page', $paginationDTO->page);
    }


    public function createMechanicShop(CreateMechanicShopsDTO $mechanicShopDTO)
    {
        return MechanicShop::create($mechanicShopDTO->toArray());
    }

    public function updateMechanicShop(UpdateMechanicShopsDTO $mechanicShopDTO)
    {
        $mechanicShop = MechanicShop::findOrFail($mechanicShopDTO->id);
        $mechanicShop->update($mechanicShopDTO->toArray());
        return $mechanicShop;
    }

    public function getMechanicShopById(int $mechanicShopId)
    {
        return MechanicShop::findOrFail($mechanicShopId);
    }

    public function destroyMechanicShop(int $mechanicShopId)
    {
        $mechanicShop = MechanicShop::findOrFail($mechanicShopId);

        return $mechanicShop->delete();
    }
}
