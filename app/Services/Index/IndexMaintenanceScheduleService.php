<?php

namespace App\Services\Index;

use App\DTO\PaginationDTO;
use App\Interfaces\MaintenanceScheduleInterface;

class IndexMaintenanceScheduleService{

        public function __construct(
        protected MaintenanceScheduleInterface $maintenanceScheduleInterface
    ) {
    }


  public function handle(PaginationDTO $request)
    {
        $maintenanceSchedule = $this->maintenanceScheduleInterface->getAllMaintenanceSchedulesPaginated($request);

        return $maintenanceSchedule;
    }
}