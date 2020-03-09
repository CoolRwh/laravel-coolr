<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CateGoryController extends BaseController
{

    //

    public function list($cate_name)
    {
        return view('web.category.list', compact('cate_name'));
    }

}
