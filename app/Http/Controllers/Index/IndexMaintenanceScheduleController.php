<?php

namespace App\Http\Controllers\Index;

use App\DTO\PaginationDTO;
use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResponse;
use App\Services\Index\IndexMaintenanceScheduleService;
use Illuminate\Http\Request;

class IndexMaintenanceScheduleController extends Controller
{
    public function __construct(
        protected IndexMaintenanceScheduleService $indexMaintenanceScheduleService
    ) {

    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = new PaginationDTO($request['perPage'], $request['page'], $request->toArray());
        $result = $this->indexMaintenanceScheduleService->handle($data);
        return ApiResponse::paginatedSuccess($result);
    }
}