<?php

namespace App\Http\Controllers\Register;



use App\DTO\Create\CreateMechanicShopsDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Register\RegisterMechanicShopRequest;
use App\Http\Responses\ApiResponse;
use App\Services\Register\RegisterMechanicShopsService;
use Illuminate\Support\Facades\Auth;

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
        $data = $request->validated();
        $data['user_id'] = $data['user_id'] ?? Auth::id();
        $dataDTO = new CreateMechanicShopsDTO(...$data);

        $this->registerMechanicShopsService->handle($dataDTO);
        return ApiResponse::noContent();
    }
}