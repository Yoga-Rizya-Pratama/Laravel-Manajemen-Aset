@extends('layouts.app')

@section('content')
<div class="container mt-3">
    @include('layouts.nav')
    @include('layouts.menu_admin')
    <h5 class="h">Pilih Tahun</h5>
    <div class="pilih-tahun">
        <form action="/laporan/proses" method="GET">
            @csrf
            <select name="tahun_pembelian" id="" class="form-select">
                <option selected="selected" class="form-control">Tahun</option>
                @for ($i=date('Y'); $i>=date('Y')-32; $i-=1)
                <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
            <input type="submit" class="btn-cek" value="Cek">
        </form>
        @if (Session::has('pesan'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{Session::get('pesan')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    {{-- @include('laporan.cetak') --}}
</div>

@endsection
