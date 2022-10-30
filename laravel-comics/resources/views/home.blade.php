@extends('shared.app')

@section('mainAreaComponent')
    {{-- Area relativa all'area main superiore -> FILE: areaHomeTop.blade.php <-> SCSS: main.scss --}}
    <div class="areaHomeTop">
        @include('shared.areaHomeTop')
    </div>
    {{-- Area relativa all'area main inferiore -> FILE: areaHomeButton.blade.php <-> SCSS: main.scss --}}
    <div class="areaHomeBottom bg-colorBlue">
        @include('shared.areaHomeBottom')
    </div>
@endsection
