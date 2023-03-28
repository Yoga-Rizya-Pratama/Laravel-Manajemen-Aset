<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class AssetController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
            $dataBarang = Barang::orderBy('created_at', 'desc')->paginate(15);
            return view('asset.dashboard', compact('dataBarang'));
    }

    public function tambah(Request $request)
    {
        $year = date('Y');
        $user_subbidang = Auth::user()->sub_bidang;
        // dd($request);

        // if($request->no_rangka == null){
        //     $no_rangka = '-';
        // }
        // else{
        //     $no_rangka =$request->no_rangka;
        // }

        $validates = $request->validate([
            'nama_barang' => 'required',
            'kode_barang' =>'required',
            'merek' => 'required',
            'bahan' => 'nullable',
            'asal_usul' => 'nullable',
            'no_register' => 'nullable',
            'ukuran' => 'nullable',
            'no_pabrik' => 'nullable',
            'no_bpkb' => 'nullable',
            'no_mesin' => 'nullable',
            'no_rangka' => 'nullable',
            'no_polisi' => 'nullable',
            'nilai_asset' => 'required',
            'keterangan' => 'required'
        ]);

        Barang::create([
            'user_id' => Auth::user()->id,
            'subbidang' => $user_subbidang,
            'nama_barang' => $request->nama_barang,
            'kode_barang' => $request->kode_barang,
            'merek' => $request->merek,
            'bahan' => $request->bahan,
            'asal_usul' => $request->asal_usul,
            'no_register' => $request->no_register,
            'ukuran' => $request->ukuran,
            'no_pabrik' => $request->no_pabrik,
            'no_bpkb' => $request->no_bpkb,
            'no_mesin' => $request->no_mesin,
            'no_rangka' => $request->no_rangka,
            'no_polisi' => $request->no_polisi,
            'tahun_pembelian' => $year,
            'nilai_aset' => $request->nilai_asset,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/asset')->with('pesan2', 'Barang '.$request->nama_barang.' Sukses Ditambahkan');
    }

    public function hapus($id)
    {
        Barang::destroy($id);
        return redirect('/asset');
    }

    public function cari(Request $request)
    {
        // dd($request->namaAsset);
        $validates = $request->validate([
            'namaAsset' => 'required'
        ]);
        $namaAsset = $request->namaAsset;
        $dataBarang = Barang::where('nama_barang', 'like', "%" . $namaAsset . "%")->paginate(3);
        return view('asset.dashboard', compact('dataBarang'));
    }

    public function edit($id){
        $barang = Barang::findOrFail($id);
        return view('asset.edit', compact('barang'));
    }

    public function editProses(Request $request, $id){
        $year = date('Y');
        $user_subbidang = Auth::user()->sub_bidang;
        // dd($request);

        // if($request->no_rangka == null){
        //     $no_rangka = '-';
        // }
        // else{
        //     $no_rangka =$request->no_rangka;
        // }

        $validates = $request->validate([
            'nama_barang' => 'required',
            'kode_barang' =>'required',
            'merek' => 'required',
            'bahan' => 'nullable',
            'asal_usul' => 'nullable',
            'no_register' => 'nullable',
            'ukuran' => 'nullable',
            'no_pabrik' => 'nullable',
            'no_bpkb' => 'nullable',
            'no_mesin' => 'nullable',
            'no_rangka' => 'nullable',
            'no_polisi' => 'nullable',
            'nilai_asset' => 'required',
            'keterangan' => 'required'
        ]);

        Barang::findOrFail($id)->update([
            'user_id' => Auth::user()->id,
            'subbidang' => $user_subbidang,
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'merek' => $request->merek,
            'bahan' => $request->bahan,
            'asal_usul' => $request->asal_usul,
            'no_register' => $request->no_register,
            'ukuran' => $request->ukuran,
            'no_pabrik' => $request->no_pabrik,
            'no_bpkb' => $request->no_bpkb,
            'no_mesin' => $request->no_mesin,
            'no_rangka' => $request->no_rangka,
            'no_polisi' => $request->no_polisi,
            'tahun_pembelian' => $year,
            'nilai_aset' => $request->nilai_asset,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/asset')->with('pesan', 'Barang '.$request->nama_barang.' Sukses Di Update');
    }
}
