<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OE360</title>

    <!-- ZUI 标准版压缩后的 CSS 文件 -->
    <link rel="stylesheet" href="{{  public_path('css/materialize.css') }}">
    {{--这里是 自定义的 样式--}}
    <link rel="stylesheet" href="{{  public_path('css/app.css') }}">
    <style>
        .footer {
            padding-top: 20px;
            background: #333;
        }
    </style>
    @yield('style')
</head>
<body>
    @yield('content')

<!-- ZUI Javascript 依赖 jQuery -->
<script src="//cdn.bootcss.com/zui/1.7.0/lib/jquery/jquery.js"></script>
<!-- ZUI 标准版压缩后的 JavaScript 文件 -->
<script src="{{ public_path('js/materizlize.js') }}"></script>
    {{--这里写自己的js--}}
<script src="{{ public_path('js/app.js') }}"></script>
@yield('js')
</body>
</html>
