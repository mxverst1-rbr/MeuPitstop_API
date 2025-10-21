<?php

namespace App\Services\Destroy;

use App\Interfaces\MaintenanceScheduleInterface;
use App\Interfaces\MechanicShopsInterface;

class DestroyMaintenanceScheduleService{

        public function __construct(
        protected MaintenanceScheduleInterface $maintenanceScheduleInterface
    ) {
    }
  public function handle(int $id)
    {
        $maintenanceSchedule = $this->maintenanceScheduleInterface->destroyMaintenanceSchedule($id);

        return $maintenanceSchedule;
    }
}