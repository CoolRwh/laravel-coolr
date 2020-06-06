<?php

namespace App\Http\Controllers\Web;

use App\Model\Article;

class IndexController extends BaseController
{
    //

    public function index(){

        $article_lists = Article::select('id','title','created_at')->orderBy('created_at','desc')->where('isopen',1)->get();
        return view('web.index.index',compact('article_lists'));
    }
}
