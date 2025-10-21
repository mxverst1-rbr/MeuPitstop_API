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
        return MaintenanceSchedule::paginate($paginationDTO->limit, ['*'], 'page', $paginationDTO->page);
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
        return MaintenanceSchedule::findOrFail($maintenanceScheduleId);
    }

    public function destroyMaintenanceSchedule(int $maintenanceScheduleId)
    {
        $maintenanceSchedule = MaintenanceSchedule::findOrFail($maintenanceScheduleId);

        return $maintenanceSchedule->delete();
    }
}
