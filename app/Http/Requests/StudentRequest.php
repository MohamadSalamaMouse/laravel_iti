<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id'=>'required|unique:students|integer',
            'name'=>'required|alpha',
            'email'=>'required|unique:students|email',
            'phone'=>'required|unique:students',
            'department'=>'integer',
            'image'=>'image'
        ];
    }
    public function messages(){
        return[
            'id.required'=>'please enter id...',
             'id.unique'=>'please enter another code ....',
            'name.required'=>'please enter name...',
            'email.required'=>'please enter email...',
            'email.unique'=>'please enter another code ....',
            'phone.required'=>'please enter phone...',
            'phone.unique'=>'please enter another code ....',
        ];
}
}
