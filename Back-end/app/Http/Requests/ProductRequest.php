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
            'gearBox'=>'required',
            'productImage'=>'required|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'productCode.required'=>'Please enter product code!!',
            'productName.required'=>'Please enter product name!!',
            'listPrice.required'=>'Please enter product price!',
            'listPrice.numeric'=>'Product price must be numeric!',
            'discountPercent.numeric'=>'Product deduction percentage must be numeric!',
            'productImage.required'=>'Please select product photo!',
            'productImage.mimes'=>'Not an image file!',
            'gearBox.required'=>'Please enter your vehicle\'\ transmission type!',
            'productImage.max'=>'File size cannot exceed 2048KB!'
        ];
    }
}
