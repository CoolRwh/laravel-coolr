<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagsController extends BaseController
{
    //

    public function list($tags){
        return view('web.tags.list',compact('tags'));
    }
}
