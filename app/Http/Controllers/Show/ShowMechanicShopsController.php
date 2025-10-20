<?php

namespace App\Http\Controllers\Show;

use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResponse;
use App\Services\Show\ShowMechanicShopsService;


class ShowMechanicShopsController extends Controller

{
    public function __construct(
        protected ShowMechanicShopsService $showMechanicShopsService
    ) {
    }
    public function __invoke(int $id)
    {
        $mechanicShop = $this->showMechanicShopsService->handle($id);

        return ApiResponse::success($mechanicShop);
    }
}