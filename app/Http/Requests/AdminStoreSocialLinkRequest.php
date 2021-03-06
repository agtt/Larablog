<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;

class AdminStoreSocialLinkRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->superuser;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:2,max:255',
            'url'   => 'required|url',
            'icon'  => 'required|min:4,max:255',
        ];
    }
}
