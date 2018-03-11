@extends('layouts.master')
@section('nav-bar')
    @include('layouts.nav-fixed')
@stop
@section('content')
    <div class="ui centered grid">
        <div class="six wide tablet eight wide computer column">
            <div style="padding-top: 120px; padding-bottom: 120px;">
                <h1 class="ui header">产品说明书下载</h1>
                @if($instructions)
                    @foreach($instructions as $instruction)
                    <div class="ui relaxed divided list">
                        <div class="item">
                            <i class="large book middle aligned icon"></i>
                            <div class="content">
                                <a class="header" href="//{{ env('QINIU_HOST').$instruction->url }}">{{  $instruction->name }}</a>
                                <div class="description">{{ $instruction->updated_at->toDateString() }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="ui divider"></div>
                    @endforeach
                    @endif
            </div>
        </div>
    </div>
@stop