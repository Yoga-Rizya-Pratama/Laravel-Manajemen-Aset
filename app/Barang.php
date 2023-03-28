<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    public function users(){
        $this->belongsTo('App\User');
    }
    protected $guarded = 'id';
    // protected $fillable = ['*'];
    protected $fillable = ['user_id','subbidang', 'kode_barang','nama_barang', 'merek', 'bahan', 'asal_usul', 'no_register', 'ukuran', 'no_pabrik', 'no_rangka', 'no_mesin', 'no_polisi', 'no_bpkb', 'tahun_pembelian', 'nilai_aset', 'keterangan'];
    // protected $fillable = ['subbidang', 'bahan', 'no_mesin', 'no_register',  'ukuran', 'no_bpkb', 'tahun_pembelian', 'no_polisi', 'no_rangka',  'no_pabrik', 'nama_barang', 'merek', 'asal_usul', 'nilai_aset', 'keterangan'];
}
