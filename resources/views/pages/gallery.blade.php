@extends('master.main')

@section('styles')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container p-5 bg-light text-center">

            <div class="card-body">
                <h1 class="card-title">Check our gallery</h1>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua</p>
                <a href="#" class="btn btn-outline-primary">View now</a>
            </div>

    </div>
    <div class="container align-self-center">
        <div class="row pt-2">
            @component('components.cards.cardsgallery1')
            @endcomponent
        </div>
        <div class="row pt-3">
            @component('components.cards.cardsgallery2')
            @endcomponent
        </div>
    </div>
@endsection
