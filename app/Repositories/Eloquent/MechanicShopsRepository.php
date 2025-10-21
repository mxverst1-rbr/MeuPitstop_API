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
        $paginator = MechanicShop::paginate($paginationDTO->limit, ['*'], 'page', $paginationDTO->page);
        $paginator->getCollection()->transform(function (MechanicShop $item) {
            $item->user_name = $item->user?->name;

            unset($item->user_id);
            unset($item->user);

            return $item;
        });

        return $paginator;
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
        $mechanicShop = MechanicShop::findOrFail($mechanicShopId);
        $mechanicShop->user_name = $mechanicShop->user?->name;

        unset($mechanicShop->user_id);
        unset($mechanicShop->user);

        return $mechanicShop;
    }

    public function destroyMechanicShop(int $mechanicShopId)
    {
        $mechanicShop = MechanicShop::findOrFail($mechanicShopId);

        return $mechanicShop->delete();
    }
}
