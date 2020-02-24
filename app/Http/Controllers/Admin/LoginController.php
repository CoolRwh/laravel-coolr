<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function index(){

        if (request()->method() === 'POST'){

            $data = request()->except('_token');
            if (!is_null($data['username'])){
                return redirect('admin')->with('success','登陆成功！welcome form this pages');
            }
        }else{
            return view('admin.login.login');
        }
    }

}
