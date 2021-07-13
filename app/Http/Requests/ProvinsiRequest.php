<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProvinsiRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if ($this->method() == 'PATCH') {
            $provinsi_rules  = 'required|string|max:100|unique:provinsi,nama_provinsi,' . $this->get('id');
        } else {
            $provinsi_rules  = 'required|string|max:100|unique:provinsi,nama_provinsi';
        }
        return [
            'nama_provinsi'   => $provinsi_rules,
        ];
    }
}
