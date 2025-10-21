<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Destroy\DestroyMaintenanceScheduleController;
use App\Http\Controllers\Destroy\DestroyMechanicShopsController;
use App\Http\Controllers\Index\IndexMaintenanceScheduleController;
use App\Http\Controllers\Index\IndexMechanicShopsController;
use App\Http\Controllers\Register\RegisterMaintenanceScheduleController;
use App\Http\Controllers\Register\RegisterMechanicShopsController;
use App\Http\Controllers\Register\RegisterUserController;
use App\Http\Controllers\Show\ShowMaintenanceScheduleController;
use App\Http\Controllers\Show\ShowMechanicShopsController;
use App\Http\Controllers\Update\UpdateMaintenanceScheduleController;
use App\Http\Controllers\Update\UpdateMechanicShopsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', RegisterUserController::class);

Route::middleware('auth:sanctum')->group(function () {

    Route::group(['prefix' => 'user'], static function () {
        Route::get('/', [UserController::class, 'getUser']);
    });

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::group(['prefix' => 'mechanicShops'], static function () {
        Route::post('/', RegisterMechanicShopsController::class);
        Route::get('/', IndexMechanicShopsController::class);
        Route::get('/{id}', ShowMechanicShopsController::class);
        Route::put('/{id}', UpdateMechanicShopsController::class);
        Route::delete('/{id}', DestroyMechanicShopsController::class);
    });

    Route::group(['prefix' => 'maintenanceSchedule'], static function () {
        Route::post('/', RegisterMaintenanceScheduleController::class);
        Route::get('/', IndexMaintenanceScheduleController::class);
        Route::get('/{id}', ShowMaintenanceScheduleController::class);
        Route::put('/{id}', UpdateMaintenanceScheduleController::class);
        Route::delete('/{id}', DestroyMaintenanceScheduleController::class);
    });
});