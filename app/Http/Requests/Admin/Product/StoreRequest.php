<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
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
            'prod_title' => ['required', Rule::unique('products')->whereNull('deleted_at')],
            'slug' => ['required', Rule::unique('products')->whereNull('deleted_at')],
            'prod_sku' => ['required', Rule::unique('products')->whereNull('deleted_at')],
            'prod_qty' => 'required',
            'prod_fabric' => 'required',
            'disclaimer' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'pkr_price' => 'required',
            'qatari_price' => 'required',
            'saudi_price' => 'required',
            'cad_price' => 'required',
            'euro_price' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',


        ];
    }



    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'response'      => $validator->errors()
        ]));
    }
}
