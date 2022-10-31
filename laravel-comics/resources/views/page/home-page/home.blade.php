@extends('shared.app')

@section('mainAreaComponent')
    <div class="home">
        @include('page.home-page.jumbo');
        <div class="containerLarge">
            <h2 class="title">NEW WEEKLY COLLECTION</h2>
            <div class="cards">
                @foreach ($collection as $item)
                    <div class="card">
                        <img class="imageCard" src="{{ asset($item['thumb']) }}" alt="{{ $item['title'] }}">
                        <h3>{{ $item['category'] }}</h3>
                        <h2>{{ $item['title'] }}</h2>
                    </div>
                @endforeach
            </div>

            <h2 class="title">NEW RELEASES FROM DC UNIVERSE INFINITE</h2>
            <div class="cardsRelease">
                @foreach ($releases as $item)
                    <div class="card">
                        <img class="imageCard" src="{{ asset($item['thumb']) }}" alt="{{ $item['title'] }}">
                        <h2>{{ $item['title'] }}</h2>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="jumboBottom">
            @include('page.home-page.jumbo-bottom');
        </div>
        <div class="containerLarge">
            <h2 class="title">NEWS FROM AROUND THE MULTIVERSE</h2>
            <div class="cards">
                @foreach ($movies as $item)
                    <div class="card">
                        <img class="imageCard" src="{{ asset($item['thumb']) }}" alt="{{ $item['title'] }}">
                        <h3>{{ $item['category'] }}</h3>
                        <h2>{{ $item['title'] }}</h2>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
