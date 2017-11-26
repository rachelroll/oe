<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Compiled and minified CSS -->

    <!-- Compiled and minified JavaScript -->

    <!-- Compiled and minified JavaScript -->
    <title>OE360</title>
    <style>
        /* fallback */
        @font-face {
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 400;
            src: url('fonts/roboto/2fcrYFNaTjcS6g4U3t-Y5UEw0lE80llgEseQY3FEmqw.woff2') format('woff2');
        }
    </style>
    {{--这里是 自定义的 样式--}}
    <link rel="stylesheet" href="css/app.css">
    <!-- Material Icons -->
    @yield('style')

</head>
<body>
@include('layouts.nav')
    @yield('content')

<!-- ZUI Javascript 依赖 jQuery -->

<!-- ZUI 标准版压缩后的 JavaScript 文件 -->

    {{--这里写自己的js--}}
<script src="js/app.js"></script>
    {{--<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>--}}
@yield('js')
</body>
</html>
