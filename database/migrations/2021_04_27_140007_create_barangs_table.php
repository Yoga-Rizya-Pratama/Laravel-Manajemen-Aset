<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('subbidang');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->string('merek');
            $table->string('bahan')->nullable(true);
            $table->string('asal_usul')->nullable(true);
            $table->string('no_register')->nullable(true);
            $table->string('ukuran')->nullable(true);
            $table->string('no_pabrik')->nullable(true);
            $table->string('no_rangka')->nullable(true);
            $table->string('no_mesin')->nullable(true);
            $table->string('no_polisi')->nullable(true);
            $table->string('no_bpkb')->nullable(true);
            $table->year('tahun_pembelian')->nullable(true);
            $table->integer('nilai_aset');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
