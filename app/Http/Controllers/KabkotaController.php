<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\KabkotaRequest;
use App\Kabkota;
use App\Provinsi;

class KabkotaController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        // $this->middleware('izin');
        $this->middleware('adminOperator');
    }

    public function index()
    {
        $halaman    = 'Kabupaten/Kota';        
        // $list_table = Provinsi::orderBy('nama_provinsi','asc')->paginate(10);
        $kabkota_list = Kabkota::orderBy('id_provinsi->nama_provinsi','asc')->paginate(10);
        $jumlah_kabkota  = Kabkota::select('nama_kabkota')->count();
        return view('kabkota.index', compact('kabkota_list', 'halaman', 'jumlah_kabkota'));
    }

    public function create()
    {
        //
    }

    public function store(KabkotaRequest $request)
    {
        $input = $request->all();
        $kabkota = Kabkota::create($input);
        return redirect('kabkota')->with('tambah','Kabupaten/Kota berhasil ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit(Kabkota $kabkota)
    {
        $halaman    = 'Edit Kabupaten/Kota';
        return view('kabkota.edit', compact('kabkota', 'halaman'));
    }

    public function update(Kabkota $kabkota, KabkotaRequest $request)
    {
        $input = $request->all();
        $kabkota->update($input);
        return redirect('kabkota')->with('edit','Kabupaten/Kota berhasil dirubah');
    }

    public function destroy(Kabkota $kabkota)
    {
        $kabkota->delete();
        return redirect('kabkota')->with('hapus','Kabupaten/Kota berhasil dihapus');
    }

    public function cari(Request $request) {
        $halaman    = 'Kabupaten/Kota';
        $kata_kunci = trim($request->input('kata_kunci'));
        $id_provinsi = $request->input('id_provinsi');
        if (!empty($kata_kunci)) {
            // Query
            $query = Kabkota::where('nama_kabkota', 'LIKE', '%' . $kata_kunci . '%');
            (! empty($id_provinsi)) ? $query->Provinsi($id_provinsi) : '';
            $kabkota_list = $query->paginate(5);
            // URL Links pagination
            $pagination = (! empty($id_provinsi)) ? $pagination = $kabkota_list->appends(['id_provinsi' => $id_provinsi]) : '';
            $pagination = $kabkota_list->appends(['kata_kunci' => $kata_kunci]);
            $jumlah_kabkota = $kabkota_list->total();
            return view('kabkota.index', compact('kabkota_list', 'kata_kunci', 'pagination', 'jumlah_kabkota', 'id_provinsi', 'halaman'));
        }
        
        else if (!empty($id_provinsi)) {
            $kabkota_list = Kabkota::where('id_provinsi', $id_provinsi)->paginate(5);
            $pagination = (! empty($id_provinsi)) ? $pagination = $kabkota_list->appends(['id_provinsi' => $id_provinsi]) : '';
            $jumlah_kabkota = $kabkota_list->total();
            return view('kabkota.index', compact('kabkota_list', 'pagination', 'jumlah_kabkota', 'id_provinsi','halaman'));
        }
        return redirect('kabkota');
    }
}
