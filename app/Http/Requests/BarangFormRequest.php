<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'nama_barang' => [
                'required', 'string'
            ],
            'no_seri' => [
                'required'
            ],
            'kategori_id' => [
                'required','integer'
            ],
            'harga' => [
                'required', 'string'
            ],
            'stok' => [
                'required', 'string'
            ],
            'deskripsi' => [
                'required', 'string'
            ],
            'gambar' => [
                'nullable', 'mimes:jpg,jpeg,png'
            ],
        ];
        return $rules;
    }
}