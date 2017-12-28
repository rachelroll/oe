@extends('layouts.master')

<!-- Swiper -->
@if(count($carousels))
<div class="swiper-container">
    <div class="swiper-wrapper">
        @foreach($carousels as $carousel)
        <div class="swiper-slide">
            <a href="{{ route('product.show',['id'=>$carousel->url]) }}"><img src="//{{ env('QINIU_HOST') . $carousel->img }}" alt=""/></a>
        </div>
        @endforeach
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
@endif
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

<div class="ui segments ross_segments"></div>
<section class="ross_position_1">
    @if(count($products->where('position',1)))
    <div class="ui container three cards link stackable">
        @foreach($products->where('position',1)->take(4) as $product)
        <div class="card">
            <div class="image">
                <img src="//{{ env('QINIU_HOST').$product->cover }}">
            </div>
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

<!--section-->
<section class="wow" style="background-color: #999; padding: 1em 0em; margin: 40px 0;">
    <div class="ui container inverted center aligned red column">
        <h3 style="color: white">The resume is broken. Humans are not. Hire more humanely.</h3>
    </div>
</section>
<!--section.end-->


<section class="wow ross-other-products">
    <div class="ui container stackable three cards">
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui inverted button">Add Friend</div>
                        </div>
                    </div>
                </div>
                <img src="https://cdn.worktile.com/assets/images/home/index-oa-img3.png">
            </div>
            <div class="content">
                <a class="header">Team Fu</a>
                <div class="meta">
                    <span class="date">Create in Sep 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="users icon"></i>
                    2 Memberssdfsdf
                </a>
            </div>
        </div>
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui inverted button">Add Friend</div>
                        </div>
                    </div>
                </div>
                <img src="https://cdn.worktile.com/assets/images/home/index-oa-img3.png">
            </div>
            <div class="content">
                <a class="header">Team Fu</a>
                <div class="meta">
                    <span class="date">Create in Sep 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="users icon"></i>
                    2 Memberssdfsdf
                </a>
            </div>
        </div>
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui inverted button">Add Friend</div>
                        </div>
                    </div>
                </div>
                <img src="https://cdn.worktile.com/assets/images/home/index-oa-img3.png">
            </div>
            <div class="content">
                <a class="header">Team Fu</a>
                <div class="meta">
                    <span class="date">Create in Sep 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="users icon"></i>
                    2 Memberssdfsdf
                </a>
            </div>
        </div>
    </div>
    <div class="ui container four stackable cards">
        <div class="ui card">
            <div class="ui slide masked reveal image">
                <img src="https://cdn.worktile.com/assets/images/home/index-oa-img1.png" class="visible content">
                <img src="https://cdn.worktile.com/assets/images/home/index-oa-img2.png" class="hidden content">
            </div>
            <div class="content">
                <a class="header">Team Fu &amp; Hess</a>
                <div class="meta">
                    <span class="date">Create in Sep 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="users icon"></i>
                    2 Members
                </a>
            </div>
        </div>
        <div class="ui card">
            <div class="ui slide masked reveal image">
                <img src="https://cdn.worktile.com/assets/images/home/index-oa-img1.png" class="visible content">
                <img src="https://cdn.worktile.com/assets/images/home/index-oa-img2.png" class="hidden content">
            </div>
            <div class="content">
                <a class="header">Team Fu &amp; Hess</a>
                <div class="meta">
                    <span class="date">Create in Sep 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="users icon"></i>
                    2 Members
                </a>
            </div>
        </div>
        <div class="ui card">
            <div class="ui slide masked reveal image">
                <img src="https://cdn.worktile.com/assets/images/home/index-oa-img1.png" class="visible content">
                <img src="https://cdn.worktile.com/assets/images/home/index-oa-img2.png" class="hidden content">
            </div>
            <div class="content">
                <a class="header">Team Fu &amp; Hess</a>
                <div class="meta">
                    <span class="date">Create in Sep 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="users icon"></i>
                    2 Members
                </a>
            </div>
        </div>
        <div class="ui card">
            <div class="ui slide masked reveal image">
                <img src="https://cdn.worktile.com/assets/images/home/index-oa-img1.png" class="visible content">
                <img src="https://cdn.worktile.com/assets/images/home/index-oa-img2.png" class="hidden content">
            </div>
            <div class="content">
                <a class="header">Team Fu &amp; Hess</a>
                <div class="meta">
                    <span class="date">Create in Sep 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="users icon"></i>
                    2 Members
                </a>
            </div>
        </div>
    </div>
</section>



@section('js')
    <script>
        $(function() {
            $('.special.cards .image').dimmer({
                on: 'hover'
            });
        });
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

        // if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
        //     new WOW().init();
        // };
    </script>
@stop