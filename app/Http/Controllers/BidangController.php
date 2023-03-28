<?php

namespace App\Http\Controllers;

use App\Subbidang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BidangController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        if(Auth::user()->role == "admin"){
            return abort(404);
        }
        else{
            return abort(403);
        }
    }

    public function tambah(){
        if(Auth::user()->role == "admin"){
            return view('bidang.tambah');
        }
        else{
            return abort(403);
        }
    }

    public function proses(Request $request){
        Subbidang::create([
            'sub_bidang' => $request->sub_bidang
        ]);
    }
}
