<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateRequest extends FormRequest
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
            'cate_name' => 'required|max:255'
        ];
    }


    public function messages()
    {
        return [
          'cate_name.required' => '栏目不能为空',
          'cate_name.max:255' => '栏目长度不能超过255位',
        ];
    }
}
