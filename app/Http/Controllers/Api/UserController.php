<?php

namespace App\Http\Controllers\Api;


use App\Blog;
use App\User;

class UserController extends AuthController
{
    //
    public function show()
    {

        $data = auth('api')->id();

        $data = Blog::paginate(10);

        return $data;


    }

}
