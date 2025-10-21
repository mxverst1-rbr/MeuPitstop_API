<?php

namespace App\Interfaces;

use App\DTO\Create\CreateMaintenanceScheduleDTO;
use App\DTO\PaginationDTO;
use App\DTO\Update\UpdateMaintenanceScheduleDTO;



interface MaintenanceScheduleInterface
{
    public function getAllMaintenanceSchedulesPaginated(PaginationDTO $paginationDTO);
    public function createMaintenanceSchedule(CreateMaintenanceScheduleDTO $maintenanceScheduleDTO);
    public function updateMaintenanceSchedule(UpdateMaintenanceScheduleDTO $maintenanceScheduleDTO);
    public function getMaintenanceScheduleById(int $maintenanceScheduleId);
    public function destroyMaintenanceSchedule(int $maintenanceScheduleId);
}
