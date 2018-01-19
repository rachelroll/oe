<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/semantic.css">
    <link rel="stylesheet" href="/css/app.css">
    <!--[if lt IE 9]><script src = "//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script><![endif]-->

    @yield('style')

    <script src="/js/app.js"></script>
    <script src="/js/swiper.min.js"></script>

    <title>OE360</title>

    {{--<script>--}}
        {{--$(function() {--}}
            {{--$('.ui.sidebar').sidebar('attach events', '.toc.item');--}}
        {{--});--}}
    {{--</script>--}}
</head>
<body>
    <section id="ross_menu">
    <div class="ui vertical inverted sidebar icon labeled menu">
        <a class="active item">Home</a>
        <a class="item">Work23234234</a>
        <a class="item">Company</a>
        <a class="item">Careers</a>
        <a class="item">Login</a>
        <a class="item">Signup</a>
    </div>

    <div class="ui fixed inverted  menu">
        <div class="ui container">
            <a class="toc item">
                <i class="sidebar icon"></i>
            </a>
            <a href="{{ url('/') }}" class="item">
                <i class="home icon"></i> 主页
            </a>
            <div class="ui simple dropdown item">
                产品中心
                <i class="dropdown icon"></i>
                @if($categories_links)
                <div class="menu  dropdown-content">
                    <div class="ui container">
                        @foreach($categories_links as $categories_link)
                        <div class="ui simple dropdown item dropdown2">
                            {{$categories_link->name}}
                            @if(count($categories_link->product))
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <div class="ui container">
                                    @foreach($categories_link->product as $product)
                                    <a class="item" href="{{ route('product.show',['id'=>$product->id]) }}">
                                        {{ $product->model }}
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
            <div class="ui simple dropdown item">
                <i class="grid layout icon"></i>
                关于
                <i class="dropdown icon"></i>
                @if($about_links)
                <div class="menu ">
                    <div class="ui container">
                        @foreach($about_links as $about_link)
                        <a class="item" href="{{ route('about.show',['id'=>$about_link->id]) }}">
                            <i class="home icon"></i> {{ $about_link->title }}
                        </a>
                        @endforeach
                    </div>
                </div>
                    @endif
            </div>

            <div class="right item">
                <div class="ui input"><input type="text" placeholder="搜索..."></div>
            </div>
        </div>
    </div>
</section>

    <main>
        @yield('content')
    </main>

{{--页脚--}}
    <div class=" wow ui inverted vertical footer segment">
        <div class="ui center aligned container">
            <div class="ui stackable inverted divided grid">
                @if(count($footCate))
                    @foreach($footCate as $footcat)
                <div class="three wide column">
                    <h4 class="ui inverted header">{{ $footcat->name }}</h4>
                    <div class="ui inverted link list">
                        @if(count($footcat->foot))
                            @foreach($footcat->foot as $foot)
                        <a href="{{  url('foot') . '/' . $foot->id }}" class="item">{{ $foot->name }}</a>
                            @endforeach
                        @endif
                    </div>
                </div>
                    @endforeach
                @endif
                <div class="seven wide column">
                    <h4 class="ui inverted header">Footer Header</h4>
                    <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
                </div>
            </div>
            <div class="ui inverted section divider"></div>
            <div class="ui horizontal inverted small divided link list">
                <a class="item" href="#">Copyright © 2016 | by 北京欧意智能科技有限公司 京ICP备16048702号-1</a>
            </div>
        </div>
    </div>
{{--页脚.end--}}

@yield('js')
</body>
</html>
