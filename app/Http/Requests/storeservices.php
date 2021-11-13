<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeservices extends FormRequest
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
            'serve_name' => 'required|regex:/(^([ا-ى]+)(\d+)?$)/u|unique:services,serve_name->ar,'.$this->id,
            'serve_name_en' => 'required|regex:/(^([a-zA-Z]+)(\d+)?$)/u|unique:services,serve_name->en,'.$this->id,
            'desc'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'serve_name.required' => trans('validation.required'),
            'serve_name.unique' => trans('validation.unique'),
            'serve_name_en.required' => trans('validation.required'),
            'serve_name_en.unique' => trans('validation.unique'),
            'serve_name_en.regex' => trans('site.required_en'),
            'serve_name.regex' => trans('site.required_ar'),
            'desc.required'=>trans('site.desc_required'),
        ];
    }
}
