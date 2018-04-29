<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
        return[
          'cate_id'  => 'required|integer',
          'deta_id'  => 'required|integer',
          'code'     => 'required',
          'name'     => 'required',
          'amount'   => 'required|integer',
          'tax'      =>  'required|integer',
          'user_id'  => 'required|integer',

        ];
    }
}
