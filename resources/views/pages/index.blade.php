
@extends('master.main')

@section('styles')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@section('content')
            @component('components.carousels.carousels')
            @endcomponent

    <div class="container cor pt-5">
            @component('components.cards.cards')
        @endcomponent

        <div class="row pt-5 align-self-center">
            <div class="col-6">
                @component('components.text.texts')
                @endcomponent
            </div>
            <div class="col-6">
                @component('components.img.imgleft')
                @endcomponent
            </div>
        </div>
                <hr>
        <div class="row pt-3 align-self-center">
            <div class="col-6">
                @component('components.img.imgright')
                @endcomponent
            </div>
            <div class="col-6">
                @component('components.text.texts')
                @endcomponent
            </div>
        </div>
    </div>

@endsection
