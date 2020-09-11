<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierCreateRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'product_id' => 'required',
            'address' => 'required',
            'email' => 'required',
            'contact_number' => 'required|max:10',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'The First Name is required.',
            'last_name.required' => 'The Last Name is required.',
            'product_id.required' => 'The Product Type should be selected.',
            'address.required' => 'The Address is required.',
            'email.required' => 'The Valid Email is required.',
            'contact_number.required' => 'Contact Number is required.',
            'contact_number.max' => 'Contact Number is should not be greater than 10',
        ];
    }
}
