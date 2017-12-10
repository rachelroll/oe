@extends('layouts.master')
@section('nav-bar')'
    @include('layouts.nav-fixed')
    @stop
@section('content')
    {{--主图--}}
    <div class="container">
        <div class="row">
            <div class="col m12">
                {!! $product->intro !!}
                {{--<div class="card center"  >--}}
                    {{--<div class="card-image center" style="height: 500px; overflow: hidden">--}}
                        {{--<img src="//{{ env('QINIU_HOST') . $item->imgs }}">--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>

    </div>
    {{--主图.end--}}


    @stop