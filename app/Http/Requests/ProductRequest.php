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
            'name'=> 'required|unique:product,name',
            'description' => 'required',
            'category' => 'required',
            'buy' => 'required|integer',
            'sell'=> 'required|integer',
            'stock' => 'required|integer',
            'supplier_id' => 'required|exists:supplier,id',
            'image_url' =>'required|mimes:png,jpg,jpeg|max:100',
        ];
    }
}
