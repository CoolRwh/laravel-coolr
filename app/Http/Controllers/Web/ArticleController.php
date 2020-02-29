<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends BaseController
{
    //

    public function info($id){

        return view('web.article.info');
    }
}
