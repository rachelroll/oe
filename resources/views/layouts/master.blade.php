<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OE360</title>

    <!-- ZUI 标准版压缩后的 CSS 文件 -->
    <link rel="stylesheet" href="//cdn.bootcss.com/zui/1.7.0/css/zui.min.css">
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
<script src="//cdn.bootcss.com/zui/1.7.0/js/zui.min.js"></script>
@yield('js')
</body>
</html>
