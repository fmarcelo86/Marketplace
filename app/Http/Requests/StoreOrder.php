<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrder extends FormRequest
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
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_mobile' => 'required'
        ];
    }

    public function messages() {
        return [
            'customer_name.required' => 'Debe ingresar su nombre',
            'customer_email.required' => 'Debe ingresar su email',
            'customer_mobile.required' => 'Debe ingresar su número de celular'
        ];
    }
}
