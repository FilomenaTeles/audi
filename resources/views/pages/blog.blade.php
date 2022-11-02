
@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
<div class="container pt-4 align-items-center">
                @component('components.cards.cardsblog1')
                @endcomponent
    <div class="row pt-4">
        <div class="col-8">
            <h5><i>Daily News</i></h5>
            <hr>
            @component('components.cards.cardspost1')
            @endcomponent
        </div>
        <div class="col-4">
            <h5><i>Archives</i></h5>
            @component('components.archives.archives')
            @endcomponent
            <br><br>
            <h5><i>Elsewhere</i></h5>
            <ul>
                <a href="">GitHub</a><br>
                <a href="">Twitter</a><br>
                <a href="">Facebook</a><br>
            </ul>
        </div>
    </div>

</div>
@endsection
