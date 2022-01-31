<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'gambar' => 'nullable|image|mimes:png,jpg,jpeg',
            'nama'=> 'required',
            'jenis_kelamin' => 'required',
            'nomor_hp' => 'required|numeric',
            'latitude' => 'required',
            'longitude' => 'required'
        ];
    }
}
