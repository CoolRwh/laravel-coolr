<?php

namespace App\Http\Controllers\api;


use App\Blog;
use App\Http\Controllers\Controller;


class BlogController extends Controller
{

    //
    public function getUserBlog()
    {

        $data = Blog::where('user_id', auth('api')->id())->get();

        return $data;


    }
}
