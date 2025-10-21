<?php

namespace App\Http\Controllers\Register;



use App\DTO\Create\CreateMaintenanceScheduleDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Register\RegisterMaintenanceScheduleRequest;
use App\Http\Responses\ApiResponse;
use App\Services\Register\RegisterMaintenanceScheduleService;
use Illuminate\Support\Facades\Auth;

class RegisterMaintenanceScheduleController extends Controller
{
    public function __construct(
        protected RegisterMaintenanceScheduleService $registerMaintenanceScheduleService
    ) {

    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(RegisterMaintenanceScheduleRequest $request)
    {

        $data = $request->validated();
        $user = Auth::user();
        $data['user_id'] = $user->id;
        $data = new CreateMaintenanceScheduleDTO(...$data);

        $this->registerMaintenanceScheduleService->handle($data);
        return ApiResponse::noContent();
    }
}