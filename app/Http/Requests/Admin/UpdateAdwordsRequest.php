<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdwordsRequest extends FormRequest
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
            
            'client_customer_id' => 'required',
            'user_agent' => 'required',
            'client_id' => 'required',
            'client_secret' => 'required',
            'refresh_token' => 'required',
            'authorization_uri' => 'required',
            'redirect_uri' => 'required',
            'token_credential_uri' => 'required',
            'scope' => 'required',
        ];
    }
}
