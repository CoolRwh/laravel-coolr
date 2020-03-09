<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    //

    public function getUserList(){

        $data = [
          'message'=>'success',
          'users' =>  User::all(),
        ];
        return response()->json($data);
    }

}
