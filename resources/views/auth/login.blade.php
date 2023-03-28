@extends('layouts.app')

@section('content')
<div class="container">
    @if (Session::has('messege'))
    <div class="alert alert-warning">
        {{Session::get('messege')}}
    </div>
    @endif
    <div class="container-login">
        <div class="box">
            <h3 class="title"><img src="/assets/images/riau.png" alt="" width="100" height="100"> Manset (Manejemen Asset)</h3>

            <h3 class="title">Dinas Pekerjaan Umum Penataan Ruang Perumahan dan Kawasan Permukiman Provinsi Riau</h3>
            <hr>
            <p class="desc-login">
                Sistem menejemen asset ini hanya ditujukan untuk penggunaan pendataan asset pada bagian sekertariat dan
                sub-bidang nya, silahkan daftar akun anda melalui tombol daftar dibawah dan hubungi admin atau tunggu
                konfirmasi akun anda untuk dapat login di sistem menejemen asset ini. Terimakasih.
            </p>
        </div>

        <div class="login-box">
            <div class="">
                <div class="login-card">
                    <h2 class="login-text">Login</h2>
                    <form action="{{ route('login')}}" method="POST">
                        @csrf

                        {{-- email --}}
                        <div class="form-card">

                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input type="text" name="email" id=""
                                class="form-login @error('email') is-invalid @enderror" value="{{ old('email') }}">

                            @error('email')
                            <p class="alert">email atau password salah</p>
                            @enderror

                        </div>

                        {{-- password --}}
                        <div class="form-card">

                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input type="password" name="password" id="" value="{{ old('password') }}"
                                class="form-login  @error('password') is-invalid @enderror" required
                                autocomplete="current-password">

                            @error('password')
                            <p class="alert">email atau password salah</p>
                            @enderror

                        </div>

                        {{-- Daftar --}}
                        <div class="daftar">
                            <a href="/register">Daftar</a>
                        </div>

                        {{-- button --}}
                        <div class="button text-center mt-3">

                            <button type="submit" class="btn btn-login">
                                {{ __('Login') }}
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
