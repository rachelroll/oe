@extends('layouts.master')

@section('nav-bar')'
@include('layouts.nav-fixed')
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col m12">
                <h3>音响产品</h3>
                <p>我们的音乐系统和扬声器给你带来艺术家质感的品质 —— 真诚、干净、充满热情，这已成为 OE 的标志。所有产品都由精心挑选的材料制成，同时提供了多种颜色和摆放选项作为选择以匹配您的风格和室内设计。</p>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4">
                <a href="/items/{item}">
                <div class="card">
                    <div class="card-image">
                        <img src="http://ozgti7vh2.bkt.clouddn.com/sample-1.jpg">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col s12 m4">
                <a href="/items/{item}">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://ozgti7vh2.bkt.clouddn.com/sample-1.jpg">
                            <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col s12 m4">
                <a href="/items/{item}">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://ozgti7vh2.bkt.clouddn.com/sample-1.jpg">
                            <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    @stop
