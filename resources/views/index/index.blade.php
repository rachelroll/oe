@extends('layouts.master')
@section('content')
    {{--导航--}}
    <div class="container">
        <nav class="navbar" role="navigation">
            <div class="container-fluid">
                <!-- 导航头部 -->
                <div class="navbar-header">
                    <!-- 移动设备上的导航切换按钮 -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-example">
                        <span class="sr-only">切换导航</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- 品牌名称或logo -->
                    <a class="navbar-brand" href="#">LOGO</a>
                </div>
                <!-- 导航项目 -->
                <div class="collapse navbar-collapse navbar-collapse-example">
                    <!-- 一般导航项目 -->
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">首页</a></li>
                        <li class="dropdown dropdown-hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">所有产品 <span class="caret dropdown-hover"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">耳机</a></li>
                                <li><a href="#">扬声器</a></li>
                                <li><a href="#">无线扬声器</a></li>
                                <li><a href="#">放大器</a></li>
                                <li><a href="#">线材</a></li>
                            </ul>
                        </li>
                        <li><a href="#">寻找门店 </a></li>
                        <li><a href="#">技术支持 </a></li>
                        <li><a href="#">关于我们 </a></li>
                    </ul>
                </div><!-- END .navbar-collapse -->
            </div>
        </nav>
    </div>
    {{--滚动图--}}
    <div id="myNiceCarousel" class="carousel slide" data-ride="carousel">
        <!-- 圆点指示器 -->
        <ol class="carousel-indicators">
            <li data-target="#myNiceCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myNiceCarousel" data-slide-to="1"></li>
            <li data-target="#myNiceCarousel" data-slide-to="2"></li>
        </ol>

        <!-- 轮播项目 -->
        <div class="carousel-inner">
            <div class="item active">
                <img alt="First slide" src="http://zui.sexy/docs/img/slide1.jpg">
                <div class="carousel-caption">
                    <h3>我是第一张幻灯片</h3>
                    <p>:)</p>
                </div>
            </div>
            <div class="item">
                <img alt="Second slide" src="http://zui.sexy/docs/img/slide2.jpg">
                <div class="carousel-caption">
                    <h3>我是第二张幻灯片</h3>
                    <p>0.0</p>
                </div>
            </div>
            <div class="item">
                <img alt="Third slide" src="http://zui.sexy/docs/img/slide3.jpg">
                <div class="carousel-caption">
                    <h3>我是第三张幻灯片</h3>
                    <p>最后一张咯~</p>
                </div>
            </div>
        </div>

        <!-- 项目切换按钮 -->
        <a class="left carousel-control" href="#myNiceCarousel" data-slide="prev">
            <span class="icon icon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#myNiceCarousel" data-slide="next">
            <span class="icon icon-chevron-right"></span>
        </a>
    </div>
    {{--卡片--}}
    <div class="cards">
        <div class="col-md-6 col-sm-6 col-lg-6">
            <div class="card"><img src="http://zui.sexy/docs/img/img5.jpg" alt=""></div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6">
            <div class="card"><img src="http://zui.sexy/docs/img/img5.jpg" alt=""></div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6">
            <div class="card"><img src="http://zui.sexy/docs/img/img5.jpg" alt=""></div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6">
            <div class="card"><img src="http://zui.sexy/docs/img/img5.jpg" alt=""></div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6">
            <div class="card"><img src="http://zui.sexy/docs/img/img5.jpg" alt=""></div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6">
            <div class="card"><img src="http://zui.sexy/docs/img/img5.jpg" alt=""></div>
        </div>
    </div>
    {{--底部banner--}}
    <div class="items .items-hover">
        <div class="item">
            <div class="item-content">
                <div class="media"><img src="http://zui.sexy/docs/img/slide1.jpg" alt=""></div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 clearfix footer-col">
                    <img src="https://static.shiyanlou.com/img/logo-white.png">
                    <div class="footer-slogan">动手做实验，轻松学IT</div>
                    <div class="col-xs-2">
                        <div class="social-item footer-weixin-item">
                            <i class="fa fa-weixin"></i>
                            <div class="footer-weixin">
                                <img src="https://static.shiyanlou.com/img/footer-weixin.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="social-item footer-weibo-item">
                            <a href="http://weibo.com/shiyanlou2013" target="_blank">
                                <i class="fa fa-weibo"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-2 footer-col">
                    <div class="col-title">公司</div>
                    <a href="/aboutus" target="_blank">关于我们</a><br>
                    <a href="/contact" target="_blank">联系我们</a><br>
                    <a href="http://www.simplecloud.cn/jobs.html" target="_blank">加入我们</a><br>
                    <a href="https://blog.shiyanlou.com" target="_blank">技术博客</a><br>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-2 footer-col">
                    <div class="col-title">合作</div>
                    <a href="/contribute" target="_blank">我要投稿</a><br>
                    <a href="/labs" target="_blank">教师合作</a><br>
                    <a href="/edu/" target="_blank">高校合作</a><br>
                    <a href="/friends" target="_blank">友情链接</a><br>
                    <a href="/developer" target="_blank">开发者</a><br>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-2 footer-col">
                    <div class="col-title">服务</div>
                    <a href="/saas" target="_blank">企业版</a><br>
                    <a href="/bootcamp/" target="_blank">实战训练营</a><br>
                    <a href="/vip" target="_blank">会员服务</a><br>
                    <a href="/courses/reports" target="_blank">实验报告</a><br>
                    <a href="/questions/?tag=%E5%B8%B8%E8%A7%81%E9%97%AE%E9%A2%98" target="_blank">常见问题</a><br>
                    <a href="/privacy" target="_blank">隐私条款</a>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-2 footer-col">
                    <div class="col-title">学习路径</div>
                    <a href="/paths/python" target="_blank">Python学习路径</a><br>
                    <a href="/paths/linuxdev" target="_blank">Linux学习路径</a><br>
                    <a href="/paths/bigdata" target="_blank">大数据学习路径</a><br>
                    <a href="/paths/java" target="_blank">Java学习路径</a><br>
                    <a href="/paths/php" target="_blank">PHP学习路径</a><br>
                    <a href="/paths/" ,="" target="_blank">全部</a>
                </div>
            </div>
        </div>
        <div class="text-center copyright">
            <span>Copyright @2013-2017 实验楼在线教育</span>
            <span class="ver-line"> | </span>
            <a href="http://www.miibeian.gov.cn/" target="_blank">蜀ICP备13019762号</a>
        </div>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-89338452-1', 'auto');
            ga('send', 'pageview');
        </script>
    </div>
    @stop