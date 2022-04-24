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
            'akte' => 'required|image:jpg,png|max:1024',
            'foto' => 'required|image:jpg,png|max:1024',

            'email_wali' => 'required|unique:parent_users',
            'namaLengkap_wali' => 'required',
            'tempatLahir_wali' => 'required',
            'tanggalLahir_wali' => 'required',
            'jenisKelamin_wali' => 'required',
            'usia_wali' => 'required|numeric',
            'agama_wali' => 'required',
            'pekerjaan_wali' => 'required',
            'alamat_wali' => 'required',
            'noTelp_wali' => 'required',
            'foto_wali' => 'required|max:1024|image:jpg,png,jpeg',
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
            'usia.numeric' => 'Usia anda harus diisi dengan benar',

            'tinggiBadan.required' => 'Masukan tinggi badan anda ',
            'tinggiBadan.numeric' => 'Masukan tinggi harus diisi dengan benar',

            'beratBadan.required' => 'Berat badan harus diisi',
            'beratBadan.numeric' => 'Berat badan harus diisi dengan benar',


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

            'email_wali.required' => 'Email Wali Harus diisi',
            'namaLengkap_wali.required' => 'Nama Lengkap Wali Harus diisi',
            'tempatLahir_wali.required' => 'Tempat Lahir Wali Harus diisi',
            'tanggalLahir_wali.required' => 'Tanggal Lahir Wali Harus diisi',
            'jenisKelamin_wali.required' => 'Jenis Kelamin Wali Harus diisi',
            'usia_wali.required' => 'Usia Wali Harus diisi',
            'usia_wali.usia_wali' => 'Usia Wali Harus diisi dengan benar',

            'agama_wali.required' => 'Agama Wali Harus diisi',
            'pekerjaan_wali.required' => 'Pekerjaan Wali Harus diisi',
            'alamat_wali.required' => 'Alamat Wali Harus diisi',
            'noTelp_wali.required' => 'No Telp Wali Harus diisi',
            'foto_wali.required' => 'Foto Wali Harus diisi',

            'email_wali.unique' => 'Email Wali Sudah Terdaftar',
        ];
    }
}
