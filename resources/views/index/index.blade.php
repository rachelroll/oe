@extends('layouts.master')
@section('nav-bar')
    @include('layouts.nav-index')
@stop
@section('content')
    {{--主打产品--}}
        <div class="container">

            <div class="section">
                <!--   Icon Section   -->
                @if(count($products))
                @foreach($products->where('type',1)->take(2) as $key=>$product)
                <div class="row">
                    @if($key == 0)
                    <div class="col s12 m6 ">
                        <div class="icon-block gallery-expand">
                            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                            <h5 class="center">{{ $product->name}}</h5>
                            <p class="light">{{ $product->intro_title }}</p>
                        </div>
                    </div>
                    <div class="col s12 m6 ">
                        <a href="{{ route('product.show',['id'=>$product->id]) }}">
                            <div class="card">
                                <div class="card-image">
                                    <img src="//{{ env('QINIU_HOST') . $product->cover }}">
                                    <span class="card-title">{{ $product->name }}</span>
                                </div>

                                <div class="card-action">
                                    <a href="#">{{ $product->intro_title }}</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    @else
                    <div class="col s12 m6">
                        <a href="{{ route('product.show',['id'=>$product->id]) }}">
                            <div class="card">
                                <div class="card-image">
                                    <img src="//{{ env('QINIU_HOST') . $product->cover }}">
                                    <span class="card-title">{{ $product->name }}</span>
                                </div>

                                <div class="card-action">
                                    <a href="#">{{ $product->intro_title }}</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col s12 m6">
                            <div class="icon-block gallery-expand">
                                <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                                <h5 class="center">{{ $product->name }}</h5>

                                <p class="light">{{ $product->intro }}</p>
                            </div>
                </div>
                    @endif
                </div>
                    @endforeach
                @endif
            </div>
        </div>
    {{--主打产品.end--}}

    {{--特色产品--}}
    <div class="container">
        <div class="row">
            <div class="col m12">
                <h3>特色产品</h3>
                {{--<p>这里放特色产品的 简介 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque eius error fugiat fugit nam officiis perferendis quaerat tempore. Aut blanditiis esse facilis impedit molestiae nam omnis optio quam suscipit tenetur!</p>--}}
            </div>

        </div>
        @if(count($products))
            @foreach($products->where('type', 2)->take(6)->chunk(3) as $chunk)
        <div class="row">
            @foreach($chunk as $product)
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="/uploads/{{ $product->cover }}">
                        <span class="card-title">{{ $product->name }}</span>
                    </div>

                    <div class="card-action">
                        <a href="#">{{ $product->intro_title }}</a>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
            @endforeach
        @endif

        <div class="row">
            <div class="col m12 center">
                <a class="waves-effect waves-light btn-large">SEE ALL</a>
            </div>
        </div>
    </div>
    {{--特色产品.end--}}
    {{--产品系列--}}
        {{--<div class="container">--}}

            {{--<div class="row">--}}
                {{--<div class="col m12">--}}
                    {{--<h3>产品系列</h3>--}}
                    {{--<p>这里放特色产品的 简介 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque eius error fugiat fugit nam officiis perferendis quaerat tempore. Aut blanditiis esse facilis impedit molestiae nam omnis optio quam suscipit tenetur!</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col s12 m6">--}}
                    {{--<div class="card">--}}
                        {{--<a href="#">--}}
                            {{--<div class="card-image">--}}
                                {{--<img src="http://ozgti7vh2.bkt.clouddn.com/sample-1.jpg">--}}
                                {{--<span class="card-title">Card Title</span>--}}
                            {{--</div>--}}

                            {{--<div class="card-action">--}}
                                {{--<span>This is a Link</span>--}}
                                {{--<a href="#">This is a link</a>--}}
                            {{--</div>--}}
                        {{--</a>--}}

                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col s12 m6">--}}
                    {{--<div class="card">--}}
                        {{--<a href="#">--}}
                            {{--<div class="card-image">--}}
                                {{--<img src="http://ozgti7vh2.bkt.clouddn.com/sample-1.jpg">--}}
                                {{--<span class="card-title">Card Title</span>--}}
                            {{--</div>--}}

                            {{--<div class="card-action">--}}
                                {{--<span>This is a Link</span>--}}
                                {{--<a href="#">This is a link</a>--}}
                            {{--</div>--}}
                        {{--</a>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col s12 m6">--}}
                    {{--<div class="card">--}}
                        {{--<a href="#">--}}
                            {{--<div class="card-image">--}}
                                {{--<img src="http://ozgti7vh2.bkt.clouddn.com/sample-1.jpg">--}}
                                {{--<span class="card-title">Card Title</span>--}}
                            {{--</div>--}}

                            {{--<div class="card-action">--}}
                                {{--<span>This is a Link</span>--}}
                                {{--<a href="#">This is a link</a>--}}
                            {{--</div>--}}
                        {{--</a>--}}

                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col s12 m6">--}}
                    {{--<div class="card">--}}
                        {{--<a href="#">--}}
                            {{--<div class="card-image">--}}
                                {{--<img src="http://ozgti7vh2.bkt.clouddn.com/sample-1.jpg">--}}
                                {{--<span class="card-title">Card Title</span>--}}
                            {{--</div>--}}

                            {{--<div class="card-action">--}}
                                {{--<span>This is a Link</span>--}}
                                {{--<a href="#">This is a link</a>--}}
                            {{--</div>--}}
                        {{--</a>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--产品系列.end--}}
    @section('js')
        <script>
            $('.modal').modal({
                    dismissible: true, // Modal can be dismissed by clicking outside of the modal
                    opacity: .5, // Opacity of modal background
                    inDuration: 300, // Transition in duration
                    outDuration: 200, // Transition out duration
                    startingTop: '4%', // Starting top style attribute
                    endingTop: '10%', // Ending top style attribute
                    ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
                        alert("Ready");
                        console.log(modal, trigger);
                    },
                    complete: function() { alert('Closed'); } // Callback for Modal close
                }
            );

        </script>
        @stop
    @stop