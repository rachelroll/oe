@extends('layouts.master')
@section('nav-bar')
    @include('layouts.nav-index')
@stop
@section('content')
    {{--主打产品--}}
        <div class="container">
            <div class="section center">
                        <h3>主打产品</h3>
                        {{--<p>这里放特色产品的 简介 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque eius error fugiat fugit nam officiis perferendis quaerat tempore. Aut blanditiis esse facilis impedit molestiae nam omnis optio quam suscipit tenetur!</p>--}}
            </div>
            <div class="section">
                <!--   Icon Section   -->
                @if(count($products))
                <div class="row">
                @foreach($products->where('type',1)->take(2) as $key=>$product)
                    <div class="col s12 m6">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="//{{ env('QINIU_HOST') . $product->cover }}">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">{{ $product->name}}</span>
                            </div>
                            <div class="card-reveal">
                                <p>{{ $product->intro_title }}</p>
                                <p class="card-link"><a href="{{ route('product.show',['id'=>$product->id]) }}">查看详情</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>

                @endif
            </div>
        </div>
    {{--主打产品.end--}}

    {{--特色产品--}}
    <div class="container">
        <div class="section center">
                <h3>特色产品</h3>
                {{--<p>这里放特色产品的 简介 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque eius error fugiat fugit nam officiis perferendis quaerat tempore. Aut blanditiis esse facilis impedit molestiae nam omnis optio quam suscipit tenetur!</p>--}}
        </div>
        <div class="section">
            @if(count($products))
                @foreach($products->where('type', 2)->take(6)->chunk(3) as $chunk)
                    <div class="row">
                        @foreach($chunk as $product)
                            <div class="col s12 m4">
                                <div class="card feature-item">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="//{{ env('QINIU_HOST') . $product->cover }}">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">{{ $product->name}}</span>
                                    </div>
                                    <div class="card-reveal">
                                        <p>{{ $product->intro_title }}</p>
                                        <p class="card-link"><a href="{{ route('product.show',['id'=>$product->id]) }}">查看详情</a></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            @endif
        </div>


        <div class="row">
            <div class="col m12 center">
                <a href="/product" class="waves-effect waves-light btn-large">查看所有产品</a>
            </div>
        </div>
    </div>
    {{--特色产品.end--}}
    @stop
    @section('js')
        <script>
            $(function(){
                $('.card').mouseenter(function() {
                    console.log(2342);
                    $(this).children('.card-reveal').animate({
                        opacity: .8
                    },200);
                }).mouseleave(function() {
                    $(this).children('.card-reveal').animate({
                        opacity: 0
                    },200);
                });
            });
        </script>
    @stop