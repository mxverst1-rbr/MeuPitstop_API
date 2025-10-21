<?php

namespace App\Http\Controllers\Update;

use App\DTO\Update\UpdateMaintenanceScheduleDTO;
use App\DTO\Update\UpdateMechanicShopsDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Update\UpdateMaintenanceScheduleRequest;
use App\Http\Requests\Update\UpdateMechanicShopRequest;
use App\Http\Responses\ApiResponse;
use App\Services\Update\UpdateMaintenanceScheduleService;

class UpdateMaintenanceScheduleController extends Controller

{
    public function __construct(
        protected UpdateMaintenanceScheduleService $updateMaintenanceScheduleService
    ) {
    }
    public function __invoke(UpdateMaintenanceScheduleRequest $request, int $id)
    {
        $data = $request->validated();
        $data['id'] = $id;
        $data = new UpdateMaintenanceScheduleDTO(...$data);

        $this->updateMaintenanceScheduleService->handle($data);
        return ApiResponse::noContent();
    }
}