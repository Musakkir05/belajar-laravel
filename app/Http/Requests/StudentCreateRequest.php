<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'stambuk' => 'unique:students|max:11|required',
            'nama' => 'max:20|required',
            'gender' => 'required',
            'class_id' => 'required'
        ];
    }
    public function attributes(): array
    {
        return [
            'class_id' => 'Class',
        ];
    }
    public function messages(): array
    {
        return [
            'stambuk.unique' => 'Stambuk sudah ada',
            'stambuk.max' => 'Stambuk Tidak boleh lebih :max karakter',
            'stambuk.required' => 'Silakan isi terlebih dahulu',
            'nama.required' => 'Silakan isi terlebih dahulu ',
            'nama.max' => 'Nama Tidak boleh lebih :max karakter',
        ];
    }
}
