<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class temaStoreRequest extends FormRequest
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
            'id_tema',
            'nama_tema'=>'required',
        ];
    }

    public function messages(){
        return [
            'nama_tema.required'=>'Nama Tema Harus Diisi!',  
        ];
    }
}
