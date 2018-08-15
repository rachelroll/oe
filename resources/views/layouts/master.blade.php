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

    <script src="/js/swiper.min.js"></script>
    <script src="https://cdn.bootcss.com/limonte-sweetalert2/7.15.0/sweetalert2.all.min.js"></script>
    <script src="/js/app.js"></script>

    <title>OE360</title>

</head>
<body>IndexController
    <section id="ross_menu" style="margin-bottom: 48px">
    <div class="ui vertical inverted sidebar icon labeled menu">
        <a class="active item">Home</a>
        <a class="item">Work</a>
        <a class="item">Company</a>
        <a class="item">Careers</a>
        <a class="item">Login</a>
        <a class="item">Signup</a>
    </div>

    <div class="ui fixed inverted  menu" >
        <div class="ui container">
            <a class="toc item">
                <i class="sidebar icon"></i>
            </a>
            <a href="{{ url('/') }}" class="item">
                <i class="home icon"></i>
                @if(session('lan') == 'EN')
                    Home
                    @else
                    主页
                    @endif
            </a>
            <div class="ui simple dropdown item">
                @if(session('lan') == 'EN')
                    Products
                @else
                产品中心
                @endif
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
                @if(session('lan') == 'EN')
                    About Us
                @else
                    关于
                @endif
                <i class="dropdown icon"></i>
                @if($about_links)
                <div class="menu ">
                    <div class="ui container">
                        @foreach($about_links as $about_link)

                        @if(session('lan') == 'EN')
                                <a class="item" href="{{ route('about.show',['id'=>$about_link->id]) }}">
                                    <i class="home icon"></i> {{ $about_link->title_en }}
                                </a>
                        @else
                                <a class="item" href="{{ route('about.show',['id'=>$about_link->id]) }}">
                                    <i class="home icon"></i> {{ $about_link->title }}
                                </a>
                        @endif
                        @endforeach
                    </div>
                </div>
                    @endif
            </div>
            <div class="right item">
                <div class="ui input">
                    <input id="search" type="text" placeholder="搜索...">
                    <select id="lan" class="ui search dropdown" style="margin-left: 12px">
                        @if(session('lan') == 'EN')
                            <option value="EN" selected>English</option>
                            <option value="CN">中文</option>
                        @else
                            <option value="CN" selected>中文</option>
                            <option value="EN">English</option>

                        @endif

                    </select>
                </div>
            </div>
        </div>
    </div>
    </section>

    <main>
        @yield('content')
    </main>

{{--页脚--}}
    <div class=" wow ui inverted vertical footer segment">
        <div class="ui left aligned container">
            <div class="ui stackable inverted divided grid">
                @if(count($footCate))
                    @foreach($footCate as $footcat)
                <div class="three wide column">
                    <h4 class="ui inverted header">{{ $footcat->name }}</h4>
                    <div class="ui inverted link list">
                        @if(count($footcat->foot))
                            @foreach($footcat->foot as $foot)
                                @if($foot->type)
                                    <a href="{{  $foot->url }}" target="_blank" class="item">{{ $foot->name }}</a>
                                @else
                                    <a href="{{  url('foot') . '/' . $foot->id }}" class="item">{{ $foot->name }}</a>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
                    @endforeach
                @endif
                <div class="two wide column">
                    <h4 class="ui inverted header">关注</h4>
                    <div class="ui inverted link list">
                        <a href="#" target="_blank" class="item">微信</a>
                        <a href="#" target="_blank" class="item">微博</a>
                        <a href="#" target="_blank" class="item">Twitter</a>
                    </div>
                </div>
                <div class="two wide column">
                    <h4 class="ui inverted orange header message2">热线 (点击留言)</h4>
                    <div class="ui inverted link list orange">
                        <div class="message2">
                            <i class="phone icon"></i>
                            <span>400-8988-360</span>
                        </div>
                        <div class="message2">（ 7*12小时热线）</div>
                    </div>
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
    <script>
        $('#search').keypress(function (e) {
            var key = e.which;
            if(key == 13)  // the enter key code
            {
                var model = $(this).val();
                document.location.href = "{{ route('search.search') }}" + "?model=" + model;
            }
        });
    </script>
    <script>
        $('.message2').on('click', function () {
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
                                    value: val
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
        $(function () {
            $('#lan').on('change',function() {
                if($(this).val() == 'EN') {
                    location.href = '{{ route('en.index') }}'
                } else {
                    location.href = '{{ route('cn.index') }}'
                }
            })
        })
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115664041-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-115664041-1');
    </script>
    <script src='https://publib.qinco.net/basicShare/0.4.min.js'></script>

</body>
</html>
