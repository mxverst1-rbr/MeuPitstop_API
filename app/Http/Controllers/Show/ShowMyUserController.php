<?php

namespace App\Http\Controllers\Show;

use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResponse;
use App\Services\Show\ShowMechanicShopsService;
use App\Services\Show\ShowMyUserService;


class ShowMyUserController extends Controller

{
    public function __construct(
        protected ShowMyUserService $showMyUserService
    ) {
    }
    public function __invoke()
    {
        $user = $this->showMyUserService->handle();

        return ApiResponse::success($user);
    }
}