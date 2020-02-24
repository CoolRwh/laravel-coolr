<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;


class BaseController extends Controller
{
    //
    public function __construct()
    {

        //数据
        $data = [
          'cate' => self::getCate(),
          'title' => 'shiqingliang!',
        ];

        view()->share($data);
    }


//获取栏目
    public function getCate(){
        $cate = [
          ['name' => '文章','url'=>'/'],
          ['name' => '测试1','url'=>'/'],
          ['name' => '测试2','url'=>'/'],
          ['name' => '测试3','url'=>'/'],
        ];
        return $cate;
    }
}
