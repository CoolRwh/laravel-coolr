<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;


class BlogController extends Controller
{

    //
    public function getUserBlog()
    {
        return Blog::where('user_id', auth('api')->id())->get();
    }
}
