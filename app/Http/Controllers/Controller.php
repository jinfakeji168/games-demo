<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessUsers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index(){
        $user = User::find(1);
        $amount=100;
        ProcessUsers::dispatch($user, $amount);
    }
}
