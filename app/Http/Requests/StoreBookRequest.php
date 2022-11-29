<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
        return [
            'kode_buku' => 'required|unique:books,kode_buku',
            'category_id' => 'required',
            'nama' => 'required',
            'penulis' => '',
            'penerbit' => '',
            'tahun' => 'numeric|min:4',
            'tebal' => 'numeric',
        ];
    }
}
