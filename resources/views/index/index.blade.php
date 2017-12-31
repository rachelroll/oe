@extends('layouts.master')

<!-- Swiper -->
@include('layouts.carousel')
<!--Swiper.end-->

<!--featurettes-->
<section class='featurettes'>
    <div class='ui container '>
        @if(count($categories))
        <div class='ui four column special grid'>
            @foreach($categories as $category)
            <div class='column'>
                <div class='featurette'>
                    <h3>{{ $category->name }}</h3>
                    <div class='content text-muted'>
                        {{ $category->intro }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
<!--featurettes.end-->

{{--segment--}}
<div class="ui segments ross_segments"></div>
{{--segment.end--}}

{{--position1--}}
<section class="ross_position_1">
    @if(count($products->where('position',1)))
    <div class="ui container three cards link stackable">
        @foreach($products->where('position',1)->take(4) as $product)
                <div class="card">
                    <a href="{{ route('product.show',['id'=>$product->id]) }}">
                    <div class="image">
                        <img src="//{{ env('QINIU_HOST').$product->cover }}">
                    </div>
                    </a>
                    <div class="content">
                        <div class="header">{{ $product->name }}</div>
                        <div class="meta">
                            <a>{{ $product->model }}</a>
                        </div>
                        <div class="description">
                            {{ $product->intro_title }}
                        </div>
                    </div>
                    <div class="extra content">
                <span>
                       评级
                    <div class="ui star rating">
                        @if($product->rating)
                            @for ($i = 0; $i < $product->rating; $i++)
                                <i class="icon active"></i>
                            @endfor
                            @for ($i = 0; $i < (5-$product->rating); $i++)
                                <i class="icon"></i>
                            @endfor
                        @else
                            <i class="icon"></i>
                            <i class="icon"></i>
                            <i class="icon"></i>
                            <i class="icon"></i>
                            <i class="icon"></i>
                        @endif
                    </div>
                </span>
                    </div>
                </div>

            @endforeach
    </div>
        @endif
</section>
{{--position1.end--}}

<!--segment-->
<section class="wow" style="background-color: #999; padding: 1em 0em; margin: 40px 0;">
    <div class="ui container inverted center aligned red column">
        <h3 style="color: white"></h3>
    </div>
</section>
<!--segment.end-->

{{--position2and3--}}
<section class="ross-position2">
    <!--position2-->
    @if(count($products->where('position',2)))
    <div class="ui container stackable three cards">
        @foreach($products->where('position',1)->take(4) as $product)
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui inverted dimmer">
                    <div class="content">
                        <div class="center">
                            <p class="ui inverted">{{ $product->intro_title }}</p>
                            <a href="{{ route('product.show',['id'=>$product->id]) }}"><div class="ui  button">查看详情</div></a>
                        </div>
                    </div>
                </div>
                <img src="//{{ env('QINIU_HOST') . $product->cover }}">
            </div>
            <div class="content">
                <a class="header">{{ $product->name }}</a>
                <div class="meta">
                    <span class="date">{{ $product->model }}</span>
                </div>
            </div>
            <div class="extra content">
               <span>
                       评级
                    <div class="ui star rating">
                        @if($product->rating)
                            @for ($i = 0; $i < $product->rating; $i++)
                                <i class="icon active"></i>
                            @endfor
                            @for ($i = 0; $i < (5-$product->rating); $i++)
                                <i class="icon"></i>
                            @endfor
                        @else
                            <i class="icon"></i>
                            <i class="icon"></i>
                            <i class="icon"></i>
                            <i class="icon"></i>
                            <i class="icon"></i>
                        @endif
                    </div>
                </span>
            </div>
        </div>
        @endforeach
    </div>
    @endif
    <!--position2.end-->
    <!--position3-->
    @if(count($products->where('position',0)))
        <div class="ui container stackable four cards">
            @foreach($products->where('position',0)->take(16) as $product)
                <div class="card">
                    <div class="blurring dimmable image">
                        <div class="ui inverted dimmer">
                            <div class="content">
                                <div class="center">
                                    <p class="ui inverted">{{ $product->intro_title }}</p>
                                    <a href="{{ route('product.show',['id'=>$product->id]) }}"><div class="ui  button">查看详情</div></a>
                                </div>
                            </div>
                        </div>
                        <img src="//{{ env('QINIU_HOST') . $product->cover }}">
                    </div>
                    <div class="content">
                        <a class="header">{{ $product->name }}</a>
                        <div class="meta">
                            <span class="date">{{ $product->model }}</span>
                        </div>
                    </div>
                    <div class="extra content">
               <span>
                       评级
                    <div class="ui star rating">
                        @if($product->rating)
                            @for ($i = 0; $i < $product->rating; $i++)
                                <i class="icon active"></i>
                            @endfor
                            @for ($i = 0; $i < (5-$product->rating); $i++)
                                <i class="icon"></i>
                            @endfor
                        @else
                            <i class="icon"></i>
                            <i class="icon"></i>
                            <i class="icon"></i>
                            <i class="icon"></i>
                            <i class="icon"></i>
                        @endif
                    </div>
                </span>
                    </div>
                </div>
            @endforeach
    </div>
        @endif
    <!--position3.end-->
</section>
{{--position2.end--}}

@section('js')
    <script>
        $(function() {
            $('.ross-position2 .card .dimmable').dimmer({
                on: 'hover'
            });
        });
        // if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
        //     new WOW().init();
        // };
    </script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            // effect: 'fade',
            autoplay: {
                delay: 4000
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            autoHeight: true
        });
    </script>
@stop