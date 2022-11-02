@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')

        <h1 class="text-center m-5 p-5">Contact Us</h1>
        <div class="container text-justify ">
            @component('components.text.texts')
            @endcomponent
            @component('components.form.form')
                @endcomponent
        </div>


@endsection
