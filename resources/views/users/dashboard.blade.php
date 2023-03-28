@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        @include('layouts.nav')
        @include('layouts.menu_admin')

            {{-- <a class="add-asset" href="/login">
                <div class="add-asset-button ml-3 mt-5">
                    <i class="fas fa-plus"></i>
                    <h6 class="add-text">add user</h6>
                </div>
            </a> --}}
        @if ($users->count() == 0)
            <h6>Tidak ada users</h6>

            @else
            <h5 class="h">Data Users<h5>
                @if (Session::has('pesan'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    {{Session::get('pesan')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Hp</th>
                        <th>Alamat</th>
                        <th>Sub Bidang</th>
                        <th>Role</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->alamat}}</td>
                            <td>{{$user->sub_bidang}}</td>
                            <td>{{$user->role}}</td>
                            <td>
                               @if ($user->status == 0)
                                 <a href="/admin/konfirmasi/{{$user->id}}"><Button class="btn-cd">Konfirmasi</Button></a>
                                @elseif (Auth::user()->id == $user->id)
                                <h6>Akun Saya</h6>
                                 @else
                                 <a href="/admin/hapus/{{$user->id}}"><button class="btn-cd">Hapus</button></a>
                               @endif

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
