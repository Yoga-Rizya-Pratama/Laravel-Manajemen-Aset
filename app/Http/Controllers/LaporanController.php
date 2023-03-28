<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      if(Auth::user()->role == "admin"){
        return view('laporan.dashboard');
      }
      else{
          return abort(403);
      }
    }


    public function proses(Request $request){
        $detailAset = Barang::where('tahun_pembelian', $request->tahun_pembelian)->get();
        // dd($request->tahun_pembelian);
        if($detailAset->count() > 0){
            return view('laporan.cetak', compact('detailAset'));
        }
        else{
            return back()->with('pesan', 'Data Tidak Ada');
        }
    }

}
