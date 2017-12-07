@extends('layouts.master')
@section('nav-bar')'
    @include('layouts.nav-fixed')
    @stop
@section('content')
    {{--主图--}}
    <div class="container">
        @foreach($product->productInfo as $item)
        <div class="row">
            <div class="col m12">
                <div class="card center"  >
                    <div class="card-image center" style="height: 500px; overflow: hidden">
                        <img src="/uploads/{{ $item->imgs }}">
                    </div>
                </div>
                <div class="card-content">
                    <h4>{{ $item->intro }}</h4>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{--主图.end--}}


    @stop