@extends('shared.app')

@section('mainAreaComponent')
    {{-- Area relativa alla jumbotron -> FILE: jumbo.blade.php <-> SCSS: header.scss --}}
    <div class="jumbo">
        @include('page.comics-page.jumbo')
    </div>
    {{-- Area relativa all'area main superiore -> FILE: areaHomeTop.blade.php <-> SCSS: mainComics.scss --}}
    <div class="areaComicsTop">
        @include('page.comics-page.areaComicsTop')
    </div>
    {{-- Area relativa all'area main inferiore -> FILE: areaHomeButton.blade.php <-> SCSS: mainComics.scss --}}
    <div class="areaComicsBottom bg-colorBlue">
        @include('page.comics-page.areaComicsBottom')
    </div>
@endsection
