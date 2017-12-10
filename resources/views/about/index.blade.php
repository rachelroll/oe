@extends('layouts.master')
@section('nav-bar')
    @include('layouts.nav-index')
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col m12">
                <p>
                    {!! $about->content !!}
                </p>
            </div>
        </div>
    </div>

    @stop
