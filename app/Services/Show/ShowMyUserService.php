<?php

namespace App\Services\Show;

use App\Interfaces\MechanicShopsInterface;
use Illuminate\Support\Facades\Auth;

class ShowMyUserService{

        public function __construct(
        protected MechanicShopsInterface $mechanicShopsInterface
    ) {
    }
  public function handle()
    {
       $user = Auth::user();

        return $user;
    }
}