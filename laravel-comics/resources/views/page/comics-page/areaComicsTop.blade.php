<div class="container">
    <div class="cards">
        <h2>CURRENT SERIES</h2>
        @foreach ($seriesComics as $item)
            <div class="card">
                <img class="imageCard" src="{{ asset($item['thumb']) }}" alt="{{ $item['series'] }}">
                <h3>{{ $item['series'] }}</h3>
            </div>
        @endforeach
        <input type="button" value="LOAD MORE">
    </div>

















</div>
