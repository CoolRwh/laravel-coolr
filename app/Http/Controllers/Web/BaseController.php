<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Model\Article;
use App\model\Cate;
use App\Model\Tag;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
    public function __construct()
    {
        //数据
        $data = [
          'cate' => self::getCate(),
          'title' => 'shiqingliang!',
          'tag' => self::getTag(),
          'm_article' => self::getArticle(),
        ];
        view()->share($data);
    }


    //获取栏目
    public function getCate(){
        return    Cate::all();
    }
    //获取标签
    public function getTag(){
      return  Tag::where('state',1)->orderBy('sort','asc')->get();
    }
    //获取menu最新文章
    public function getArticle(){
       return Article::select('title','id')->where('isopen',1)->orderBy('created_at','desc')->get();
    }
}
