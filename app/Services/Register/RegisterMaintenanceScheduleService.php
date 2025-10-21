<?php

namespace App\Services\Register;

use App\DTO\Create\CreateMaintenanceScheduleDTO;
use App\DTO\Create\CreateMechanicShopsDTO;
use App\Interfaces\MaintenanceScheduleInterface;
use App\Interfaces\MechanicShopsInterface;

class RegisterMaintenanceScheduleService{

        public function __construct(
        protected MaintenanceScheduleInterface $maintenanceScheduleInterface
    ) {
    }


  public function handle(CreateMaintenanceScheduleDTO $maintenanceScheduleDTO)
    {
        $maintenanceSchedule = $this->maintenanceScheduleInterface->createMaintenanceSchedule($maintenanceScheduleDTO);

        return $maintenanceSchedule;
    }
}