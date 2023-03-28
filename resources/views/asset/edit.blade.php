@extends('layouts.app')

@section('content')
<div class="container mt-3">
    {{-- @include('layouts.nav') --}}
    @include('layouts.menu_admin')
    <h4 class="mt-5 h">Edit Asset</h4>
    <hr>
    <div class="edit-barangs">


        <form action="/asset/edit/proses/{{$barang->id}}" method="POST" class="form mt-3">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="" class="form-label">Kode Barang</label>
                <input type="text" name="kode_barang" id="" placeholder="Masukkan nama barang"
                    value="{{$barang->kode_barang}}" class="form-control @error('kode_barang') is-invalid @enderror"
                    value="{{ old('kode_barang') }}">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Nama Barang</label>
                <input type="text" name="nama_barang" id="" placeholder="Masukkan nama barang"
                    value="{{$barang->nama_barang}}" class="form-control @error('nama_barang') is-invalid @enderror"
                    value="{{ old('nama_barang') }}">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Merek</label>
                <input type="text" name="merek" id="" class="form-control" placeholder="Masukkan merek"
                    value="{{$barang->merek}}">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Bahan</label>
                <input type="text" name="bahan" value="{{$barang->bahan}}" id="" class="form-control" placeholder="Kosongkan jika tidak ada">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Asal Usul</label>
                <input type="text" name="asal_usul" value="{{$barang->asal_usul}}"  id="" class="form-control" placeholder="Kosongkan jika tidak ada">
            </div>

            <div class="form-group">
                <label for="" class="form-label">ukuran</label>
                <input type="text" name="ukuran" value="{{$barang->ukuran}}"  id="" class="form-control" placeholder="Kosongkan jika tidak ada">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">No Register</label>
                        <input type="text" name="no_register" value="{{$barang->no_register}}" id="" class="form-control"
                            placeholder="Kosongkan jika tidak ada">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">No Pabrik</label>
                        <input type="text" name="no_pabrik"value="{{$barang->no_pabrik}}"  id="" class="form-control"
                            placeholder="Kosongkan jika tidak ada">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">No Rangka</label>
                        <input type="text" name="no_rangka" value="{{$barang->no_rangka}}"  id="" class="form-control"
                            placeholder="Kosongkan jika tidak ada">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">No Mesin</label>
                        <input type="text" name="no_mesin" value="{{$barang->no_mesin}}"  id="" class="form-control"
                            placeholder="Kosongkan jika tidak ada">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">No Polisi</label>
                        <input type="text" name="no_polisi" value="{{$barang->no_polisi}}"  id="" class="form-control"
                            placeholder="Kosongkan jika tidak ada">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">No Bpkb</label>
                        <input type="text" name="no_bpkb" value="{{$barang->no_bpkb}}"  id="" class="form-control"
                            placeholder="Kosongkan jika tidak ada">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="form-label">Nilai Asset</label>
                <input type="number" name="nilai_asset" value="{{$barang->nilai_aset}}"  id="" class="form-control" placeholder="Masukan Nilai Aset">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Keterangan</label>
                <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"
                    placeholder="Isi keterangan">{{$barang->keterangan}} </textarea>
            </div>
            <input type="submit" value="Edit" class="btn btn-primary" id="input">
        </form>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#input').click(function () {
            yakin = confirm("Edit Data ?");

        });
    });
</script>
@endsection
