<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'username' => 'required|unique:users|max:25',
            'password' => 'required|min:6',
            'email'    =>  'required'
        ];
    }

    public function messages()
    {
        return [
          'username.required' => '用户名不能为空！',
          'username.unique'   => '用户名已存在！',
          'username.max:25'   => '用户名不能超过25个字符！',
          'password.required' => '密码不能为空！',
          'password.min'      => '密码不能小于6位！',
        ];
    }

}
