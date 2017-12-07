@extends('layouts.master')

@section('nav-bar')'
@include('layouts.nav-fixed')
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col m12">
                <h3>{{ $category->name }}</h3>
                <p>{{ $category->intro }}</p>
            </div>
        </div>
        @if(count($category->product))
        @foreach($category->product->chunk(3) as $chunk)
        <div class="row">
            @foreach($chunk as $product)
            <div class="col s12 m4">
                <a href="/product/{{ $product->id }}">
                <div class="card">
                    <div class="card-image">
                        <img src="/uploads/{{ $product->cover }}">
                        <span class="card-title">{{ $product->name }}</span>
                    </div>
                    <div class="card-content">
                        <p>{{ $product->intro_title }}</p>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
            @endforeach
        @endif
    </div>

    @stop
