@extends('layouts.master')
@section('nav-bar')'
    @include('layouts.nav-fixed')
    @stop
@section('content')
    <div class="container">
        <div class="row center">
            <div class="col m12">
                <h3>所有产品</h3>
            </div>
        </div>
        @if(count($product))
            @foreach($product->chunk(3) as $chunk)
                <div class="row">
                    @foreach($chunk as $product)
                        <div class="col s12 m4">
                            <a href="/product/{{ $product->id }}">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="//{{ env('QINIU_HOST') . $product->cover }}">
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