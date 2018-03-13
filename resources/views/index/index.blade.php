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
                    @if(!$is_mobile)
                    <div class='content text-muted'>
                        {!! $category->intro !!}
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
<!--featurettes.end-->

{{--新品速递--}}
<section class="ross_position_1">
    @if(count($newProductArr))
    <div class="ross_divided">
        <div class="ui vertically divided grid">
            <div class="ui container stackable">
                <div class="row">
                    <h1 style="color: #1678c2 !important;">新品速递</h1>
                </div>
            </div>
            <div class="two column row">
            </div>
        </div>
    </div>
    @foreach($positionLayout as $key=>$layout)
    <div class="ui container {{ \App\Utils\Utils::N2L((int)$layout) }} cards link stackable">
        @foreach($newProductArr[$key] as $product)
            <div class="card">
                <a class="image" href="{{ route('product.show',['id'=>$product->id]) }}">
                        <img src="//{{ env('QINIU_HOST').$product->cover }}">
                </a>

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
                    <span>评级</span>
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
                    <div class="ui labeled button right floated" tabindex="0">
                        @if($product->buy_url)
                        <a class="ui basic blue button" href="{{ $product->buy_url }}">
                             在线购买
                        </a>
                        @endif
                        @if($product->price)
                        <div class="ui basic left pointing blue label">
                            <span>¥{{ number_format($product->price,2) }}</span>
                        </div>
                        @else
                        <div class="ui basic left pointing blue label message" key="{{ $product->model }}">
                            <span>留言询价</span>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endforeach
    @endif
</section>
{{--新品速递.end--}}


{{--分类遍历--}}
<section class="ross-category">
    <!--position2-->
    @if(count($categories))
        @foreach($categories as $key=>$category)
            <!--divided-->
            <div class="ross_divided" style="margin-bottom: 20px;">
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
                                            <div class="ui  button">
                                                <a href="{{ route('product.show',['id'=>$product->id]) }}">查看详情</a>
                                            </div>
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
                                <span>评级</span>
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
                                <div class="ui labeled button right floated" tabindex="0">
                                    @if($product->buy_url)
                                        <a class="ui basic blue button" href="{{ $product->buy_url }}">
                                            在线购买
                                        </a>
                                    @endif
                                    @if($product->price)
                                        <div class="ui basic left pointing blue label">
                                            <span>¥{{ number_format($product->price,2) }}</span>
                                        </div>
                                    @else
                                        <div class="ui basic left pointing blue label message" key="{{ $product->model }}">
                                            <span>留言询价</span>
                                        </div>
                                    @endif
                                </div>
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
                                        <div class="ui  button">
                                            <a href="{{ route('product.show',['id'=>$product->id]) }}">查看详情
                                            </a>
                                        </div>
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
                            <span>评级</span>
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
                            <div class="ui labeled button right floated" tabindex="0">
                                @if($product->buy_url)
                                    <a class="ui basic blue button" href="{{ $product->buy_url }}">
                                        在线购买
                                    </a>
                                @endif
                                @if($product->price)
                                    <div class="ui basic left pointing blue label">
                                        <span>¥{{ number_format($product->price,2) }}</span>
                                    </div>
                                @else
                                    <div class="ui basic left pointing blue label" key="{{ $product->model }}">
                                        <span>留言询价</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        @endforeach
    @endif
</section>
{{--分类遍历.end--}}


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
    <script>
        $('.message').on('click', function () {
            var model = $(this).attr('key');
            swal({
                title: '客服会及时与您沟通',
                html:
                '<label for="swal-input0">姓名:</label>' +
                '<input id="swal-input0" class="swal2-input">' +
                '<label for="swal-input1">邮箱或手机:</label>' +
                '<input id="swal-input1" class="swal2-input" autofocus>' +
                '<label for="swal-input2">留言:</label>' +
                '<textarea id="swal-input2" rows="6" style="height: 200px;" class="swal2-input">',

                showCancelButton: true,
                confirmButtonText: '确定',
                cancelButtonText: '取消',
                showLoaderOnConfirm: true,
                allowOutsideClick: false,
                preConfirm: function(result) {

                    return new Promise(function(resolve) {

                        if (result) {
                            var val = {
                                name:$('#swal-input0').val(),
                                contact:$('#swal-input1').val(),
                                message:$('#swal-input2').val()
                            };

                            console.log(model);
                            if(!val.contact) {
                                swal('哎呦……', '留个联系方式吧');
                                return false;
                            }

                            $.ajax({
                                url: '/send-message',
                                type: 'POST',
                                dataType: 'json',
                                data: {
                                    _token: '{{ csrf_token() }}',
                                    value: val,
                                    model:model
                                }
                            })
                                .done(function (response) {
                                    console.log(response);
                                    swal({
                                        type: 'success',
                                        html: response.message
                                    });
                                })
                                .fail(function () {
                                    swal('哎呦……', '出错了');
                                })

                        }
                    });

                }
            })
        });
    </script>
@stop