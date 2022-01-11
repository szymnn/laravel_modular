<?php

namespace Modules\Shop\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productRequest extends FormRequest
{

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
            'name'          => 'required|min:5',
            'description'   => 'required|min:5',
            'categories'    => 'required',
            'amount'        => 'required',
            'price'         => 'required',
            'product_owner' => 'string',
            'additional_info'=>'string'

        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

}
