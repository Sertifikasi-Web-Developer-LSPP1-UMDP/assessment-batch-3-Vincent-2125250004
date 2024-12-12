<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataPendaftaranRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'nama' => ['required', 'string'],
            'jalur' => ['required', 'string'],
            'prodi1' => ['required', 'string'],
            'prodi2' => ['nullable', 'string'],
            'prodi3' => ['nullable', 'string'],
            'tempatlahir' => ['required', 'string'],
            'tanggallahir' => ['required', 'date'],
            'jenisKelamin' => ['required', 'in:Laki-Laki,Wanita'],
            'agama' => ['required', 'string'],
            'alamat' => ['required', 'string'],
            'kota' => ['required', 'string'],
            'provinsi' => ['required', 'string'],
            'kewarganegaraan' => ['required', 'string'],
            'jurusanSekolah' => ['required', 'string'],
            'noHp' => ['required', 'string'],
            'namaIbu' => ['required', 'string'],
            'waktuKuliah' => ['required', 'string'],
            'referensi' => ['required', 'string'],
            'statusPendaftaran' => ['required', 'string'],
            'namaSekolah' => ['required', 'string'],
            'informasi' => ['required', 'string'],
            'nisn' => ['required', 'string'],
        ];
    }

}
