<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
use AuthenticatesUsers;

    protected $redirectTo = '/admin';



     public function __construct()
     {
         $this->middleware('guest:admin')->except('logout');

     }

    public function username()
    {
        return 'username';
    }

    /**
     * 重写登录视图页面
     */

    public function showLoginForm()
    {
        return view('admin.login.login');
    }

    /**
     * 退出到登录页面
     */

    public function logout(Request $request)
    {
        if (auth('admin')->id()){
            auth('admin')->logout();
        }

        return redirect('admin/login')->with('success','退出成功！');
    }

    /**
     * 自定义认证驱动
     */
    protected function guard()
    {
        return auth()->guard('admin');
    }
   /* public function index(){

        if (request()->method() === 'POST'){

            $data = request()->except('_token');
            if (!is_null($data['username'])){
                return redirect('admin')->with('success','登陆成功！welcome form this pages');
            }
        }else{
            return view('admin.login.login');
        }
    }*/


}
