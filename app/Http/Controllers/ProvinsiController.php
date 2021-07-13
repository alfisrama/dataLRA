<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProvinsiRequest;
use App\Provinsi;

class ProvinsiController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        // $this->middleware('izin');
        $this->middleware('adminOperator');
    }


    public function index()
    {
        $halaman    = 'Provinsi';        
        $provinsi_list = Provinsi::orderBy('nama_provinsi','asc')->paginate(10);
        $jumlah_provinsi  = Provinsi::select('nama_provinsi')->count();
        return view('provinsi.index', compact('provinsi_list', 'halaman', 'jumlah_provinsi'));
    }

    public function store(ProvinsiRequest $request)
    {
        $input = $request->all();
        $provinsi = Provinsi::create($input);
        return redirect('provinsi')->with('tambah','Provinsi berhasil ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit(Provinsi $provinsi)
    {
        $halaman    = 'Edit Provinsi';
        return view('provinsi.edit', compact('provinsi', 'halaman'));
    }

    public function update(Provinsi $provinsi, ProvinsiRequest $request)
    {
        $input = $request->all();
        $provinsi->update($input);
        return redirect('provinsi')->with('edit','Provinsi berhasil dirubah');
    }

    public function destroy(Provinsi $provinsi)
    {
        $provinsi->delete();
        return redirect('provinsi')->with('hapus','Provinsi berhasil dihapus');
    }

    public function cari(Request $request) {
        $halaman    = 'Provinsi';
        $kata_kunci = trim($request->input('kata_kunci'));
        if (!empty($kata_kunci)) {
            $provinsi_list = Provinsi::where('nama_provinsi', 'LIKE', '%' . $kata_kunci . '%')->paginate(5);
            $pagination = $provinsi_list->appends(['kata_kunci' => $kata_kunci]);
            $jumlah_provinsi = $provinsi_list->total();
            return view('provinsi.index', compact('provinsi_list', 'kata_kunci', 'pagination', 'jumlah_provinsi', 'halaman'));
        }
        return redirect('provinsi');
    }
}
