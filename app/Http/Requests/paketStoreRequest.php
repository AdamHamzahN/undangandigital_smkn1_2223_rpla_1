<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class paketStoreRequest extends FormRequest
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
            'id_paket',
            'nama_paket'=>'required',
            'harga'=>'required',
            'detail_paket'=>'required',
        ];
    }

    public function messages(){
        return [
            'nama_paket.required'=>'Nama Paket Harus Diisi!',
            'harga.required'=>'Harga Paket Harus Diisi!',
            'detail_paket.required'=>'Detail Paket Harus Diisi!',  
        ];
    }
}
