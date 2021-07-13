<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LraRequest;
use App\Lra;
use App\Provinsi;
use App\Kabkota;
use App\User;
use Illuminate\Support\Facades\Auth;

class LraController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show', 'cari']]);
    }

    public function index()
    {
        $halaman    = 'LRA';
        $lra_list = Lra::orderBy('tanggal','desc')->paginate(100);
        $jumlah_lra  = Lra::select('id')->count();
        return view('lra.index', compact('lra_list', 'halaman', 'jumlah_lra'));
    }

    public function create()
    {
        $halaman = 'Tambah Data LRA';
        return view('lra.create', compact('halaman'));
    }
    
    public function store(Lra $lra, LraRequest $request)
    {
        $lra->tanggal       = $request->tanggal;
        $lra->penAnggaran   = $request->penAnggaran;
        $lra->penRealisasi  = $request->penRealisasi;
        $lra->penPersen     = $request->penPersen;
        $lra->belAnggaran   = $request->belAnggaran;
        $lra->belRealisasi  = $request->belRealisasi;
        $lra->belPersen     = $request->belPersen;
        $lra->id_provinsi   = $request->id_provinsi;
        $lra->id_kabkota    = $request->id_kabkota;
        $lra->id_users      = Auth::user()->id;
        $lra->save();

        return redirect('lra')->with('tambah','Data LRA berhasil ditambahkan');
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit(Lra $lra)
    {
        $halaman    = 'Edit LRA';
        return view('lra.edit', compact('lra', 'halaman'));
    }
    
    public function update(Lra $lra, LraRequest $request)
    {
        $lra->tanggal       = $request->tanggal;
        $lra->penAnggaran   = $request->penAnggaran;
        $lra->penRealisasi  = $request->penRealisasi;
        $lra->penPersen     = $request->penPersen;
        $lra->belAnggaran   = $request->belAnggaran;
        $lra->belRealisasi  = $request->belRealisasi;
        $lra->belPersen     = $request->belPersen;
        $lra->id_provinsi   = $request->id_provinsi;
        $lra->id_kabkota    = $request->id_kabkota;
        $lra->id_users      = Auth::user()->id;
        $lra->update();
        return redirect('lra')->with('edit','Data LRA berhasil dirubah');
    }
    
    public function destroy(Lra $lra)
    {
        $lra->delete();
        return redirect('lra')->with('hapus','Data LRA berhasil dihapus');
    }

    public function cari(Request $request) {
        $halaman    = 'LRA';
        $tanggal = $request->input('tanggal');
        $id_provinsi = $request->input('id_provinsi');
        $id_kabkota = $request->input('id_kabkota');
        if (!empty($tanggal)) {            
            $query = Lra::where('tanggal', $tanggal);
            (! empty($id_provinsi)) ? $query->Provinsi($id_provinsi) : '';
            (! empty($id_kabkota)) ? $query->Kabkota($id_kabkota) : '';
            $lra_list = $query->paginate(5);
            $pagination = (! empty($id_provinsi)) ? $pagination = $lra_list->appends(['id_provinsi' => $id_provinsi]) : '';
            $pagination = (! empty($id_kabkota)) ? $pagination = $lra_list->appends(['id_kabkota' => $id_kabkota]) : '';
            $pagination = $lra_list->appends(['tanggal' => $tanggal]);
            $jumlah_lra = $lra_list->total();
            return view('lra.index', compact('lra_list', 'pagination', 'jumlah_lra', 'tanggal', 'id_provinsi', 'id_kabkota', 'halaman'));
        }

        else if (!empty($id_provinsi)) {
            $query = Lra::where('id_provinsi', $id_provinsi);
            (! empty($tanggal)) ? $query->Tanggal($tanggal) : '';
            (! empty($id_kabkota)) ? $query->Kabkota($id_kabkota) : '';
            $lra_list = $query->paginate(5);
            $pagination = (! empty($tanggal)) ? $lra_list->appends(['tanggal' => $tanggal]) : '';
            $pagination = (! empty($id_kabkota)) ? $pagination = $lra_list->appends(['id_kabkota' => $id_kabkota]) : '';
            $pagination = $lra_list->appends(['id_provinsi' => $id_provinsi]);
            $jumlah_lra = $lra_list->total();
            return view('lra.index', compact('lra_list', 'pagination', 'jumlah_lra', 'id_provinsi', 'id_kabkota', 'tanggal', 'halaman'));
        }

        else if (!empty($id_kabkota)) {
            $query = Lra::where('id_kabkota', $id_kabkota);
            (! empty($tanggal)) ? $query->Tanggal($tanggal) : '';
            (! empty($id_provinsi)) ? $query->Provinsi($id_provinsi) : '';
            $lra_list = $query->paginate(5);
            $pagination = (! empty($tanggal)) ? $lra_list->appends(['tanggal' => $tanggal]) : '';
            $pagination = (! empty($id_provisi)) ? $lra_list->appends(['id_provinsi' => $id_provinsi]) : '';
            $pagination = $lra_list->appends(['id_kabkota' => $id_kabkota]);
            $jumlah_lra = $lra_list->total();
            return view('lra.index', compact('lra_list', 'pagination', 'jumlah_lra', 'id_provinsi', 'id_kabkota', 'tanggal', 'halaman'));
        }
        return redirect('lra');
    }
}
