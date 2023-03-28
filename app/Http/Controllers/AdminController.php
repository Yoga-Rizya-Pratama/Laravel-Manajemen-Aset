<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Subbidang;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (Auth::user()->status == 1) {
            $barangs = Barang::all();
            $subbidangs = Subbidang::all();
            return view('admin.dashboard', compact('barangs', 'subbidangs'));
        } else {
            return back()->with('messege', 'Akun Anda Belum Dikonfirmasi');
        }
    }

    public function konfirmasi($id){
        $status = 1;
        User::findOrFail($id)->update([
            'status' => $status
        ]);

        return back();
    }

    public function hapus($id){
       User::destroy($id);
        return back()->with('pesan', 'Data Sukses Dihapus');
    }
}
