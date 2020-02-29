<?php

namespace App\Http\Controllers\Admin;


use App\User;

class IndexController extends BaseController
{

    //

    public function index()
    {

            $data = User::with('getType')->get();

//        return view('admin.index.index',compact('data'));
        return view('admin.index.welcome',compact('data'));
    }

    public function welcome()
    {

        return view('admin.index.welcome');
    }
}
