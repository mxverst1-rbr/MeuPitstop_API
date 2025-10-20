<?php

namespace App\Http\Controllers\Destroy;

use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResponse;
use App\Services\Destroy\DestroyMechanicShopsService;

class DestroyMechanicShopsController extends Controller

{
    public function __construct(
        protected DestroyMechanicShopsService $destroyMechanicShopsService
    ) {
    }
    public function __invoke(int $id)
    {
        $this->destroyMechanicShopsService->handle($id);
        return ApiResponse::noContent();
    }
}