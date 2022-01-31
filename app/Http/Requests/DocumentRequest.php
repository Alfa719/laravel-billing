<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DocumentRequest extends FormRequest
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
        Auth::user()->foto_ktp == null ? $ktpValidation = 'required' : $ktpValidation = 'nullable';
        Auth::user()->foto_user_ktp == null ? $ktpUserValidation = 'required' : $ktpUserValidation = 'nullable';
        return [
            'nik' => 'numeric|required|digits:16',
            'foto_ktp' => $ktpValidation . '|image|mimes:png,jpg,jpeg,jfif',
            'foto_user_ktp' => $ktpUserValidation . '|image|mimes:png,jpg,jpeg'
        ];
    }
}
