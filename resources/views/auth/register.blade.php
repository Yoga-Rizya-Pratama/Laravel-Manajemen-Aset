@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><img src="/assets/images/riau.png" alt="" width="50" height="50">{{ __('Daftar Akun Menset (Menejemen Asset)') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control register-form @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('Alamat Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control register-form @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Nomor Hp') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number"
                                    class="form-control register-form @error('phone') is-invalid @enderror" name="phone" required
                                    autocomplete="new-password">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Alamat Lengkap') }}</label>

                            <div class="col-md-6">
                                <textarea id="alamat" type="text"
                                    class="form-control register-form @error('alamat') is-invalid @enderror" name="alamat" required
                                    autocomplete="new-password"></textarea>

                                @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Peran') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" required autocomplete="new-password"> --}}
                                <select name="role" id="" class="form-select @error('role') is-invalid @enderror">
                                    <option value="admin">Admin</option>
                                    <option value="operator">Operator Bidang</option>
                                </select>
                                @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Sub Bidang') }}</label>
                            <div class="col-md-6">
                                {{-- <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" required autocomplete="new-password"> --}}
                                <select name="subBidang" id=""
                                    class="form-select @error('subBidang') is-invalid @enderror">
                                    @if ($subBidang->count() == 0)
                                    <option>Kosong</option>
                                      @endif
                                    @foreach ($subBidang as $sb)
                                    <option value="{{$sb->sub_bidang}}">{{$sb->sub_bidang}}</option>
                                    @endforeach
                                </select>
                                @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                </div>

                <div class="form-group row">
                    <label for="password"
                        class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password"
                            class="form-control register-form @error('password') is-invalid @enderror" name="password"
                            required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm"
                        class="col-md-4 col-form-label text-md-right">{{ __('Ulangi Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control register-form" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-success w-100">
                            {{ __('Daftar') }}
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
