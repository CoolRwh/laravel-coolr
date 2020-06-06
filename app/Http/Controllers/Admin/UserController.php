<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use http\Env\Request;

class UserController extends Controller
{

    public function list(){

        $users = User::paginate(5);
        return view('admin.article.list',compact('users'));
    }

    /**
     * 图片上传
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function add(UserRequest $request)
    {

        User::create(
            [
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'email'    => $request->input('email'),
          ]
        );

        return redirect('admin/article/list')->with('success', '添加成功!');
    }

    public function update($id){

        dd($id);
    }

}
