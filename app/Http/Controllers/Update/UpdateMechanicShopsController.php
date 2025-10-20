<?php

namespace App\Http\Controllers\Update;

use App\DTO\Update\UpdateMechanicShopsDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Update\UpdateMechanicShopRequest;
use App\Http\Responses\ApiResponse;
use App\Services\Update\UpdateMechanicShopsService;

class UpdateMechanicShopsController extends Controller

{
    public function __construct(
        protected UpdateMechanicShopsService $updateMechanicShopsService
    ) {
    }
    public function __invoke(UpdateMechanicShopRequest $request, int $id)
    {
        $data = $request->validated();
        $data['id'] = $id;
        $data = new UpdateMechanicShopsDTO(...$data);

        $this->updateMechanicShopsService->handle($data);
        return ApiResponse::noContent();
    }
}