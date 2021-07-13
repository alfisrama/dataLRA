<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KabkotaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if ($this->method() == 'PATCH') {
            $kabkota_rules  = 'required|string|max:100|unique:kabkota,nama_kabkota,' . $this->get('id');
        } else {
            $kabkota_rules  = 'required|string|max:100|unique:kabkota,nama_kabkota';
        }
        return [
            'nama_kabkota'  => $kabkota_rules,
            'id_provinsi'   => 'required',
        ];
    }
}
