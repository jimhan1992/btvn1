<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAccountRequest extends FormRequest
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
            'first_name'=>'min:2|max:32',
            'last_name'=>'min:2|max:32',
            'email'=>'required|email:rfc,dns|unique:account_models',//|unique:account_models
            'password'=>'min:6|max:32',
            'address'=>'min:1',
        ];
    }
    public function messages()
    {
        return[
            'first_name.min'=>'tối thiểu 2 ký tự',
            'first_name.max'=>'tối đa 32 ký tự',
            'last_name.min'=>'tối đa 32 ký tự',
            'last_name.max'=>'tối đa 32 ký tự',
            'email.required'=>'Bắt Buộc',
            'email.email'=>'Không Đúng định dạng',
            'email.unique'=>'email đã tồn tại',
            'password.min'=>'tối thiểu 6 ký tự',
            'password.max'=>'tối đa 32 ký tự',
            'address.min'=>'bắt buộc',
        ];

    }
}
