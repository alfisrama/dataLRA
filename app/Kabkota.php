<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabkota extends Model
{
    protected $table = 'kabkota';
    protected $fillable = [
        'nama_kabkota',
        'id_provinsi',
        'avatar'
    ];

    public function provinsi() {
        return $this->belongsTo('App\Provinsi', 'id_provinsi');
    }
    
    public function lra() {
        return $this->hasMany('App\Lra', 'id_kabkota');
    }

    public function scopeProvinsi($query, $id_provinsi) {
        return $query->where('id_provinsi', $id_provinsi);
    }
}
