<?php

namespace App\Services\Update;

use App\DTO\Update\UpdateMaintenanceScheduleDTO;
use App\Interfaces\MaintenanceScheduleInterface;

class UpdateMaintenanceScheduleService{

        public function __construct(
        protected MaintenanceScheduleInterface $maintenanceScheduleInterface
    ) {
    }
  public function handle(UpdateMaintenanceScheduleDTO $maintenanceScheduleDTO)
    {
        $maintenanceSchedule = $this->maintenanceScheduleInterface->updateMaintenanceSchedule($maintenanceScheduleDTO);

        return $maintenanceSchedule;
    }
}