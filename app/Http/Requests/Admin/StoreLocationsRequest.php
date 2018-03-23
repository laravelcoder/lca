<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreLocationsRequest extends FormRequest
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
            'nickname' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'logo' => 'nullable|mimes:png,jpg,jpeg,gif',
            'storefront' => 'nullable|mimes:png,jpg,jpeg,gif',
            'clinic_id' => 'max:2147483647|required|numeric|unique:locations,clinic_id,'.$this->route('location'),
        ];
    }
}
