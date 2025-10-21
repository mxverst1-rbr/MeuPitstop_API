<?php

namespace App\Http\Controllers\Destroy;

use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResponse;
use App\Services\Destroy\DestroyMaintenanceScheduleService;

class DestroyMaintenanceScheduleController extends Controller

{
    public function __construct(
        protected DestroyMaintenanceScheduleService $destroyMaintenanceScheduleService
    ) {
    }
    public function __invoke(int $id)
    {
        $this->destroyMaintenanceScheduleService->handle($id);
        return ApiResponse::noContent();
    }
}