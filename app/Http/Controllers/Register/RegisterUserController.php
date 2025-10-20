<?php

namespace App\Http\Controllers\Register;



use App\DTO\Create\CreateUserDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Register\RegisterUserRequest;
use App\Http\Responses\ApiResponse;
use App\Register\Services\RegisterUserService;

class RegisterUserController extends Controller

{
    public function __construct(
        protected RegisterUserService $registerUserService
    ) {

    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(RegisterUserRequest $request)
    {
 
        $data = new CreateUserDTO(...$request->validated());

        $this->registerUserService->handle($data);
        return ApiResponse::noContent();
    }
}