<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;
class AuthController extends Controller

{
   public function __construct(
        protected AuthService $authService
    ) {}

    public function login(LoginRequest $request)
    {
        return $this->authService->login($request);
    }

    public function register(RegisterUserRequest $request)
    {
        return $this->authService->register($request);
    }

    public function logout(Request $request)
    {
        return $this->authService->logout($request);
    }
}