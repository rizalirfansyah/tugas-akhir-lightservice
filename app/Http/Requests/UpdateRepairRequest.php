<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateRepairRequest extends FormRequest
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
            'jenis_gadget' => 'required|regex:/^[a-zA-Z0-9\s]+$/',
            'tipe_gadget' => 'required|regex:/^[a-zA-Z0-9\s]+$/',
            'kelengkapan' => 'required|regex:/^[a-zA-Z0-9\s]+$/',
            'kerusakan' => 'required|regex:/^[a-zA-Z0-9\s,]+$/',
            'password' => 'required',
            'status' => 'required',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            redirect()->back()->withInput()->withErrors($validator->errors())->with('error', 'Gagal menyimpan data.')
        );
    }
}