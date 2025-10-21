<?php

namespace App\Repositories\Eloquent;



use App\DTO\Create\CreateMaintenanceScheduleDTO;
use App\DTO\PaginationDTO;
use App\DTO\Update\UpdateMaintenanceScheduleDTO;
use App\Interfaces\MaintenanceScheduleInterface;
use App\Models\MaintenanceSchedule;




class MaintenanceScheduleRepository implements MaintenanceScheduleInterface
{

    public function getAllMaintenanceSchedulesPaginated(PaginationDTO $paginationDTO)
    {
        $paginator = MaintenanceSchedule::with('user:id,name')
            ->paginate($paginationDTO->limit, ['*'], 'page', $paginationDTO->page);

        $paginator->getCollection()->transform(function (MaintenanceSchedule $item) {
            $item->user_name = $item->user?->name;
            $item->mechanic_shop_name = $item->mechanicShop?->name;

            unset($item->user_id);
            unset($item->user);
            unset($item->mechanicShop);
            unset($item->mechanic_shop_id);
            return $item;
        });

        return $paginator;
    }


    public function createMaintenanceSchedule(CreateMaintenanceScheduleDTO $maintenanceScheduleDTO)
    {
        return MaintenanceSchedule::create($maintenanceScheduleDTO->toArray());
    }

    public function updateMaintenanceSchedule(UpdateMaintenanceScheduleDTO $maintenanceScheduleDTO)
    {
        $maintenanceSchedule = MaintenanceSchedule::findOrFail($maintenanceScheduleDTO->id);
        $maintenanceSchedule->update($maintenanceScheduleDTO->toArray());
        return $maintenanceSchedule;
    }

    public function getMaintenanceScheduleById(int $maintenanceScheduleId)
    {
        $schedule = MaintenanceSchedule::with('user:id,name')->findOrFail($maintenanceScheduleId);
        $schedule->user_name = $schedule->user?->name;
        $schedule->mechanic_shop_name = $schedule->mechanicShop?->name;

        unset($schedule->user_id);
        unset($schedule->user);
        unset($schedule->mechanicShop);
        unset($schedule->mechanic_shop_id);

        return $schedule;
    }

    public function destroyMaintenanceSchedule(int $maintenanceScheduleId)
    {
        $maintenanceSchedule = MaintenanceSchedule::findOrFail($maintenanceScheduleId);

        return $maintenanceSchedule->delete();
    }
}
