<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'add_name' => 'required|unique:product,name',
            'add_description' => 'required',
            'add_category' => 'required',
            'add_buy' => 'required|integer',
            'add_sell' => 'required|integer',
            'add_stock' => 'required|integer',
            'add_supplier_id' => 'required|exists:supplier,id',
            'add_image_url' => 'required|mimes:png,jpg,jpeg|max:100',
        ];
    }
}
