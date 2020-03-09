<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\model\Cate;
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
        ];

        view()->share($data);
    }


    //获取栏目
    public function getCate(){
        $cate = Cate::all();
        return $cate;
    }
}
