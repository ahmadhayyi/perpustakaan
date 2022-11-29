<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
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
            'kode_member' => 'required|numeric|unique:users,kode_member',
            'username' => 'required|min:5|unique:users,username',
            'password' => 'required|confirmed',
            'nama' => 'required',
            'ribath' => 'required',
            'kamar' => 'required',
            'sekolah' => 'required',
            'kelas' => 'required',
            'kelas_MHM' => 'required',
            'level' => 'required',
        ];
    }
}
