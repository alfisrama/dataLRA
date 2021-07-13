<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lra extends Model
{
    protected $table = 'lra';
    protected $fillable = [
        'tanggal',
        'penAnggaran',
        'penRealisasi',
        'penPersen',
        'belAnggaran',
        'belRealisasi',
        'belPersen',
        'id_provinsi',
        'id_kabkota',
        'id_users'
    ];

    public function provinsi () {
        return $this->belongsTo('App\Provinsi', 'id_provinsi');
    }

    public function kabkota() {
        return $this->belongsTo('App\Kabkota', 'id_kabkota');
    }

    public function users() {
        return $this->belongsTo('App\User', 'id_users');
    }

    public function scopeProvinsi($query, $id_provinsi) {
        return $query->where('id_provinsi', $id_provinsi);
    }

    public function scopeKabkota($query, $id_kabkota) {
        return $query->where('id_kabkota', $id_kabkota);
    }

    public function scopeTanggal($query, $tanggal) {
        return $query->where('tanggal', $tanggal);
    }
}
