@extends('layouts.app')

@section('content')
<div class="container">
    <a href=""></a>
    <header>
        <div class="header-laporan ">
            <div class="img">
                <img src="/assets/images/Riau.png" width="200" height="150" alt="no">
            </div>
        <div class="text-laporan">
            <h3>PEMERINTAH PROVINSI RIAU</h3>
            <h3>DINAS PEKERJAAN UMUM, PENATAAN RUANG, PERUMAHAN,</h3>
            <h3>KAWASAN PEMUKIMAN DAN PERTANAHAN</h3>
            <h3>JALAN SMAMIN TELP. (0761) 564540-564534 FAK. (0761) 564547 <h3>
            <h3>PEKANBARU 28294</h3>
        </div>
        <div class="tanggal">
            <?php $tanggal = date('d-m-Y') ?>
            <p>Pekanbaru, {{$tanggal}}</p>
        </div>
        </div>
    </header>
    <hr class="batas-hr">
    <body>
        <table class="table table-bordered">
            <thead>
                <th>No</th>
                <th>Kode Barang</th>
                <th>No Register</th>
                <th>Nama Barang</th>
                <th>Merek</th>
                <th>Bahan</th>
                <th>Tahun Pembelian</th>
                <th>Asal Usul</th>
                <th>Nilai Aset</th>
            </thead>
            <tbody>
                @foreach ($detailAset as $da)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$da->kode_barang}}</td>
                        <td>{{$da->no_register}}</td>
                        <td>{{$da->nama_barang}}</td>
                        <td>{{$da->merek}}</td>
                        <td>{{$da->bahan}}</td>
                        <td>{{$da->tahun_pembelian}}</td>
                        <td>{{$da->asal_usul}}</td>
                        <td>Rp.{{number_format($da->nilai_aset)}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</div>

<script>
    window.print();
</script>
@endsection
