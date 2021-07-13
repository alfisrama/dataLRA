<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kabkota;

class DropdownController extends Controller
{
    public function store(Request $request)
    {
        $kabkota = Kabkota::where('id_provinsi', $request->get('id'))
            ->pluck('nama_kabkota', 'id');
    
        return response()->json($kabkota);
    }
}
