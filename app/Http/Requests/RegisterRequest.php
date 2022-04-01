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
    public function messages()
    {
        return [
            'namaLengkap.required' => 'Nama Lengkap harus diisi',
            'email.required' => 'Email harus diisi',
            'email.unique' => 'Email sudah terdaftar',
            'tempatLahir.required' => 'Tempat Lahir harus diisi',
            'tanggalLahir.required' => 'Tanggal Lahir harus diisi',
            'jenisKelamin.required' => 'Jenis Kelamin harus diisi',
            'usia.required' => 'Usia anda harus diisi',
            'tinggiBadan.required' => 'Masukan tinggi badan anda ',
            'beratBadan.required' => 'Berat badan harus diisi',
            'agama.required' => 'agama harus diisi',
            'asalSekolah.required' => 'Asal sekolah harus diisi',
            'tingkatanSekolah.required' => 'Tingkatan Sekolah harus diisi',
            'unitLatihan.required' => 'Unit Latihan harus diisi',
            'tingkatanSabuk.required' => 'Tingkatan Sabuk harus diisi',
            'riwayatKesehatan.required' => 'Riwayat Kesehatan harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'noTelp.required' => 'No Telp harus diisi',
            'noTelp.unique' => 'No Telp Sudah terdaftar',
            'akte.required' => 'Akte harus diisi',
            'akte.image' => 'Akte harus berisi Image ',
            'foto.required' => 'Foto harus diisi',
            'foto.image' => 'Foto harus image',
        ];
    }
}
