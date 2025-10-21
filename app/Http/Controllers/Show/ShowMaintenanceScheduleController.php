<?php

namespace App\Http\Controllers\Show;

use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResponse;
use App\Services\Show\ShowMaintenanceScheduleService;


class ShowMaintenanceScheduleController extends Controller

{
    public function __construct(
        protected ShowMaintenanceScheduleService $showMaintenanceScheduleService
    ) {
    }
    public function __invoke(int $id)
    {
        $maintenanceSchedule = $this->showMaintenanceScheduleService->handle($id);

        return ApiResponse::success($maintenanceSchedule);
    }
}