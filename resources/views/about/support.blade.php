@extends('layouts.master')
@section('nav-bar')
    @include('layouts.nav-fixed')
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col m12">
                @include('about.content')
            </div>
        </div>
    </div>
@stop
