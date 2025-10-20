<?php

namespace App\Http\Controllers\Register;



use App\DTO\Create\CreateMechanicShopsDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Register\RegisterMechanicShopRequest;
use App\Http\Responses\ApiResponse;
use App\Services\Register\RegisterMechanicShopsService;

class RegisterMechanicShopsController extends Controller

{
    public function __construct(
        protected RegisterMechanicShopsService $registerMechanicShopsService
    ) {

    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(RegisterMechanicShopRequest $request)
    {
 
        $data = new CreateMechanicShopsDTO(...$request->validated());

        $this->registerMechanicShopsService->handle($data);
        return ApiResponse::noContent();
    }
}