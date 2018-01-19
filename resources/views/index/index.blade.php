@extends('layouts.master')

<!-- Swiper -->
@include('layouts.carousel')
<!--Swiper.end-->

<!--featurettes-->
<section class='featurettes'>
    <div class='ui container '>
        @if(count($categories))
        <div class='ui six column special grid'>
            @foreach($categories as $category)
            <div class='column'>
                <div class='featurette'>
                    <h3>{{ $category->name }}</h3>
                    <div class='content text-muted'>
                        {!! $category->intro !!}
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
{{--<div class="ui segments ross_segments"></div>--}}
{{--segment.end--}}

{{--position1--}}
<section class="ross_position_1">
    @if(count($newProductArr))
    <!--divided-->
    <div class="ross_divided">
        <div class="ui vertically divided grid">
            <div class="ui container stackable">
                <div class="row">
                    <h1>新品速递</h1>
                </div>
            </div>
            <div class="two column row">
            </div>
        </div>
    </div>
        <!--divided.end-->
    @foreach($positionLayout as $key=>$layout)
    <div class="ui container {{ \App\Utils\Utils::N2L((int)$layout) }} cards link stackable">
        @foreach($newProductArr[$key] as $product)
                <div class="card">
                    <div class="image">
                        <img src="//{{ env('QINIU_HOST').$product->cover }}">
                        <a class="ui button right floated" href="{{ route('product.show',['id'=>$product->id]) }}">查看详情</a>
                    </div>

                    <div class="content">
                        <div class="header">{{ $product->model }}</div>
                        <div class="meta">
                            <a>{{ $product->name }}</a>
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
                        <span class="right floated">¥{{ number_format($product->price,2) }}</span>
                    </div>
                </div>

            @endforeach
    </div>
    @endforeach
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

{{--catetory--}}
<section class="ross-category">
    <!--position2-->
    @if(count($categories))
        @foreach($categories as $key=>$category)
            <!--divided-->
            <div class="ross_divided">
                <div class="ui vertically divided grid">
                    <div class="ui container stackable">
                        <div class="row">
                            <h1>{{$category->name}}</h1>
                        </div>
                    </div>
                    <div class="two column row ross_column">
                    </div>
                </div>
            </div>
                <!--divided.end-->
        @if(count($category->catLayout))
            @foreach($category->catLayout as $k=>$layout)
    <div class="ui container stackable {{\App\Utils\Utils::N2L((int)$layout)}} cards">
        @foreach($catProductArr[$category->id][$k] as $product)
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
                <a href="{{ route('product.show',['id'=>$product->id]) }}" class="header">{{ $product->model }}</a>
                <div class="meta">
                    <span class="date">{{ $product->name }}</span>
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
                <span class="right floated">¥{{ number_format($product->price,2) }}</span>
            </div>
        </div>
        @endforeach
    </div>
        @endforeach
        @else
        <div class="ui container stackable three cards">
            @foreach($catProductArr[$category->id][0] as $product)
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
                        <a href="{{ route('product.show',['id'=>$product->id]) }}" class="header">{{ $product->model }}</a>
                        <div class="meta">
                            <span class="date">{{ $product->name }}</span>
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
                        <span class="right floated">¥{{ number_format($product->price,2) }}</span>
                    </div>
                </div>
            @endforeach
        </div>
        @endif
        @endforeach
    @endif
    <!--catetory.end-->
</section>
{{--position2.end--}}

@section('js')
    <script>
        $(function() {
            $('.ross-category .card .dimmable').dimmer({
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