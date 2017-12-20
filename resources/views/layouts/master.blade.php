<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Compiled and minified CSS -->
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">--}}
    {{--<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>--}}
    <!-- Compiled and minified JavaScript -->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>--}}

    <title>OE360</title>
    <style>
        /* fallback */
        @font-face {
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 400;
            src: url('/fonts/roboto/2fcrYFNaTjcS6g4U3t-Y5UEw0lE80llgEseQY3FEmqw.woff2') format('woff2');
        }
    </style>
    {{--这里是 自定义的 样式--}}
    <link rel="stylesheet" href="/css/app.css">
    <!-- Material Icons -->
    @yield('style')

</head>
<body>
    @yield('nav-bar')
    <main>
        @yield('content')
    </main>

{{--页脚--}}

<footer class="page-footer teal">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">关于 OE</h5>
                <p class="grey-text text-lighten-4">
                    Original & Elegant 与 OE PLAY 隶属于北京欧意智能科技有限公司。为在亚太地区扩大投资规模和加强不同公司之间的业务关系，同时提高品牌影响力，Original & Elegant 集团决定将同中海资产管理公司共同合资成立了北京欧意智能科技有限公司,并升级至亚太区总部。</p>
            </div>
            <div class="col l4 offset-l2 s12">
                @if($about_link)
                <h5 class="white-text">友情链接</h5>

                <ul>
                    @foreach($about_link  as $about)
                    <li><a class="grey-text text-lighten-3" href="{{ url('/about/') . $about->id }}">{{ $about->title }}</a></li>
                    @endforeach
                </ul>
                @endif
            </div>

        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <p>
                Copyright © 2016 | by 北京欧意智能科技有限公司 京ICP备16048702号-1
            </p>

        </div>
    </div>
</footer>
{{--页脚.end--}}


    {{--这里写自己的js--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
<script src="/js/app.js"></script>
    {{--<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>--}}
@yield('js')
</body>
</html>
