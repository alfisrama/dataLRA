<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LraRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // if ($this->method() == 'PATCH') {
        //     $tanggal_rules  = 'required|unique:lra,tanggal,' . $this->get('id');
        // } else {
        //     $tanggal_rules  = 'required|unique:lra,tanggal';
        // }
        return [
            'id_provinsi'    => 'required',
            'id_kabkota'    => 'required',
            'tanggal'       => 'required',
            'penAnggaran'   => 'required',
            'penRealisasi'  => 'required',
            'penPersen'     => 'required',
            'belAnggaran'   => 'required',
            'belRealisasi'  => 'required',
            'belPersen'     => 'required',            
        ];
    }
}
