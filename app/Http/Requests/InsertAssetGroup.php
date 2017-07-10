<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertAssetGroup extends FormRequest
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
          'name' => 'required|max:255',
          'address' => 'required|max:255',
          'number' => 'required|max:255',
          'municipality'  => 'required|max:255',
          'bank_account' => 'max:255',
          'tax_number' => 'max:255',
          'superintendent' => 'max:255',
          'contact_tel' => 'max:255',
          'contact_mail' => 'max:255',
          'contact_address' => 'max:255',
          'founding_date' => 'date',
          'first_bill_date'  => ''
            //
        ];
    }
}
