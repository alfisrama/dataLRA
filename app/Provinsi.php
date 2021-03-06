<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsi';
    protected $fillable = [
        'nama_provinsi',
    ];

    public function kabkota() {
        return $this->hasMany('App\Kabkota', 'id_provinsi');
    }
}
