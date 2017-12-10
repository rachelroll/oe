<div class="nav-wrapper container">
    {{--Logo--}}
    <a href="/" itemprop="url" class="brand-logo site-logo">
        <img src="http://ozgti7vh2.bkt.clouddn.com/logo-1.png"  alt=""/>
    </a>
    {{--logo.end--}}
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
        <li class="site-nav--active active">
            <a href="/" class="site-nav__link">主页</a>
        </li>
        <li class="site-nav--has-submenu">
            <a href="/category/{category}" class="site-nav__link dropdown-button" data-activates="features-dropdown" data-belowOrigin="true" data-constrainWidth="false" data-hover="true">产品中心<i class="material-icons right">arrow_drop_down</i>
            </a>
            @if($categories)
            <ul id="features-dropdown" class="site-nav__submenu dropdown-content">
                @foreach($categories as $category)
                <li>
                    <a href="/category/{{$category->id}}" class="site-nav__link">{{$category->name}}</a>
                </li>
                @endforeach
            </ul>
                @endif
        </li>
        {{--<li>--}}
            {{--<a href="/blogs/news" class="site-nav__link">最新动态</a>--}}
        {{--</li>--}}
        {{--<li><a href="/cart"><i class="material-icons left">shopping_cart</i>购物车</a>--}}
        {{--</li>--}}
        <li class="site-nav--has-submenu">
            <a href="#" class="site-nav__link dropdown-button" data-activates="features-dropdown-about" data-belowOrigin="true" data-constrainWidth="false" data-hover="true">关于<i class="material-icons right">arrow_drop_down</i>
            </a>
            @if($about)
            <ul id="features-dropdown-about" class="site-nav__submenu dropdown-content">
                @foreach($about as $about)
                <li>
                    <a href="{{ url('/about') . $about->id }}" class="site-nav__link">{{ $about->title }}</a>
                </li>
                @endforeach
            </ul>
                @endif
        </li>
        {{--<li><a class="fullscreen-search" href="#"><i class="material-icons">search</i></a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="/account/login" id="customer_login_link">Log in</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="/account/register" id="customer_register_link">Create account</a>--}}
        {{--</li>--}}
    </ul>
</div>