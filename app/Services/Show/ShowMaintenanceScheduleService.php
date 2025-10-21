<?php

namespace App\Services\Show;

use App\Interfaces\MaintenanceScheduleInterface;

class ShowMaintenanceScheduleService{

        public function __construct(
        protected MaintenanceScheduleInterface $maintenanceScheduleInterface
    ) {
    }
  public function handle(int $maintenanceScheduleId)
    {
        $maintenanceSchedule = $this->maintenanceScheduleInterface->getMaintenanceScheduleById($maintenanceScheduleId);

        return $maintenanceSchedule;
    }
}