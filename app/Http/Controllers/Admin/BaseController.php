<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
    public function __construct()
    {
        $viewData = [
          'menu' => $this->getMenu(),
        ];

        view()->share($viewData);
    }


    protected function getMenu(){
        $menu = config('menu');
        return $menu;
    }
}
