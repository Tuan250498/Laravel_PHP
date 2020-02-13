<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
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
            'p_name'=>'required|unique:products,p_name,'.$this->id,
            'p_category_id'=>'required',
            'p_price'=>'required',
        ];
    }
    public function messages(){
        return [
            'p_name.required' => 'Trường này không thể bỏ trống.',
            'p_name.unique' => 'Tên sản phẩm đã tồn tại.',
            'p_category_id.required' => 'Trường này không thể bỏ trống.',
            'p_price.required' => 'Trường này không thể bỏ trống.',
        ];
    }
}
