<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'productCode'=>'required',
            'productName'=>'required',
            'listPrice'=>'required|numeric',
            'discountPercent'=>'numeric',
            'productImage'=>'required|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'productCode.required'=>'Vui lòng nhập mã sản phẩm!',
            'productName.required'=>'Vui lòng nhập tên sản phẩm!',
            'listPrice.required'=>'Vui lòng nhập giá sản phẩm!',
            'listPrice.numeric'=>'Giá sản phẩm phải kiểu số!',
            'discountPercent.numeric'=>'Phần trăm khấu trừ sản phẩm phải là kiểu số!',
            'productImage.required'=>'Vui lòng chọn ảnh sản phẩm!',
            'productImage.mimes'=>'Không phải là file ảnh!',
            'productImage.max'=>'Kích thước file không vượt quá 2048KB!'
        ];
    }
}
