<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'namaLengkap' => 'required',
            'email' => 'required|email|unique:registers',
            'tempatLahir' => 'required|string',
            'tanggalLahir' => 'required|date',
            'jenisKelamin' => 'required',
            'usia' => 'required|numeric',
            'tinggiBadan' => 'required|numeric',
            'beratBadan' => 'required|numeric',
            'agama' => 'required',
            'asalSekolah' => 'required',
            'tingkatanSekolah' => 'required',
            'unitLatihan' => 'required',
            'tingkatanSabuk' => 'required',
            'riwayatKesehatan' => 'required',
            'alamat' => 'required',
            'noTelp' => 'required|unique:registers',
            'akte' => 'required|image:jpg,png',
            'foto' => 'required|image:jpg,png',
        ];
    }
}
