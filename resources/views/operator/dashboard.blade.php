@extends('layouts.app')

@section('content')

{{-- <h3 class="mt-3">Operator Bidang</h3> --}}
<div class="container mt-3">
    @include('layouts.nav')
    @include('layouts.menu_operator')

    <div class="h">
        <h5>Total</h5>
    </div>

    <div class="total-container">
        <div class="total">
            <div class="text">
                <div class="text-h1 asset">
                    <h1>3</h1>
                </div>
                <div class="text-p asset">
                    <p>Asset</p>
                </div>
            </div>
        </div>

        <div class="total">
            <div class="text">
                <div class="text-h1 bidang">
                    <h1>1</h1>
                </div>
                <div class="text-p bidang">
                    <p>Bidang</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
