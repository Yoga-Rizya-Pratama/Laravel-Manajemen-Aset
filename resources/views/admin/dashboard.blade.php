@extends('layouts.app')

@section('content')

<div class="container dashboard-container">
    @include('layouts.nav')
    {{-- <h3>HI Admin {{Auth::user()->name}}</h3> --}}
    @include('layouts.menu_admin')

    <div class="h">
        <h5>Total</h5>
    </div>

    <div class="total-container">
        <div class="total">
            <div class="text">
                <div class="text-h1 asset">
                    <h1>{{$barangs->count()}}</h1>
                </div>
                <div class="text-p asset">
                    <p class="text-p asset">Asset</p>
                </div>
            </div>
        </div>

        <div class="total">
            <div class="text">
                <div class="text-h1 bidang">
                    <h1>{{$subbidangs->count()}}</h1>
                </div>
                <div class="text-p bidang">
                    <p>Sub Bidang</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
