<?php

namespace App\Http\Controllers\web;


class CateGoryController extends BaseController
{
    //

    public function list($cate_name){



        return view('web.category.list',compact('cate_name'));
    }
}
