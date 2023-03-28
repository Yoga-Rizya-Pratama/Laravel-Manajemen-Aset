@extends('layouts.app')

@section('content')
<div class="container mt-3">
    @include('layouts.nav')
    @include('layouts.menu_admin')

    <h5 class="h">Asset's</h5>
    <div class="asset-field">
        <a class="add-asset" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <div class="add-asset-button">
                <i class="fas fa-plus"></i>
                <h6 class="add-text">add asset</h6>
            </div>
        </a>
        @include('asset.modal')
        <div class="search-button">
            <form action="/asset/cari" method="GET">
                @csrf
                <input type="text" name="namaAsset" id="" placeholder="Cari Nama Asset...">
                <button class="btn-cari"><i class="fas fa-search"></i></button>
            </form>
        </div>

    </div>
    @if ($dataBarang->count() == 0)
    <h2 class="h alert-warning text-center">Data Kosong</h2>
    @else
    {{-- <h2>ada</h2> --}}
    <button id="detail" class="btn-detail"></button>
    @if (Session::has('pesan'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
      {{Session::get('pesan')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @elseif (Session::has('pesan2'))
      <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{Session::get('pesan2')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row ml-3 mr-3">
        @foreach ($dataBarang as $db)
        <div class="col-md-4 mt-3">
            <div class="card" id="cards">
                <div class="card-body">
                    <div class="circle">
                        <h6><i class="fas fa-file"></i> {{$loop->iteration}}</h6>
                        <div class="dropdown">
                            <a class="dropdown" type="button" id="dropdownMenu2" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                {{-- <li><a href="" class="dropdown-item"><i class="fas fa-info mr-1 ml-1" ></i>  Detail</a>
                                </li> --}}
                                <input type="hidden" value='{{$db->id}}' id="id_hidden">
                                <li><a class="dropdown-item" id="hapus"><i
                                            class="fas fa-trash"></i> Hapus</a>
                                </li>
                                <li><a href="/asset/edit/{{$db->id}}" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalEdit"><i class="fas fa-edit"></i> Edit</a>
                                </li>
                            </ul>
                        </div>
                        @include('asset.modalEdit')
                    </div>
                    <div class="h6">
                        <h6>Kode Barang </h6>
                        <p>{{$db->kode_barang}}</p>
                        <h6>Nama Barang </h6>
                        <p>{{$db->nama_barang}}</p>
                        <h6>No Register</h6>
                        <p> {{$db->no_register}}</p>
                        <h6>Merek </h6>
                        <p>{{$db->merek}}</p>
                        <h6>Nilai Asset </h6>
                        <p>Rp. {{number_format($db->nilai_aset)}}</p>
                        <div class="next" value="{{$db->id}}">
                            <h6>Asal-Usul </h6>
                            <p>{{$db->asal_usul}}</p>
                            <h6 class="">Bahan </h6>
                            <p>{{$db->bahan}}</p>
                            <h6 class="">Ukuran </h6>
                            <p>{{$db->ukuran}}</p>
                            <h6 class="">No Pabrik </h6>
                            <p>{{$db->no_pabrik}}</p>
                            <h6 class="">No Bpkb</h6>
                            <p> {{$db->no_bpkb}}</p>
                            <h6 class="">No Mesin</h6>
                            <p> {{$db->no_mesin}}</p>
                            <h6 class="">No Polisi </h6>
                            <p>{{$db->no_polisi}}</p>
                            <h6 class="">Tahun Pembelian </h6>
                            <p>{{$db->tahun_pembelian}}</p>
                            <h6 class="">Keterangan </h6>
                            <p>{{$db->keterangan}}</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        @endforeach

    </div>

    <div class="links mt-3">
        <h6>Total {{$dataBarang->total()}} Asset</h6>
        <p class=""> {{$dataBarang->links()}}</p>
        {{-- {{$dataBarang->currentPage()}}
        {{$dataBarang->perPage()}} --}}
    </div>
    @endif


</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.next').hide();
        $('#detail').html("Detail Barang");
        $('#detail').click(function () {
            $('.next').toggle();
            if ($('#detail').html() == "Detail Barang") {
                $('#detail').html("Tutup");
            } else {
                $('#detail').html("Detail Barang");
            }
        });
    });

    $(document).ready(function () {
        $('#hapus').click(function () {
           var yakin  = confirm('Hapus Data ?');
           if(yakin){
               $('#hapus').submit();
           }else{
            console.log('Cancelled');
           }
        });
    });
</script>
@endsection
