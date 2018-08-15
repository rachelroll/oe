@extends('layouts.master')
@section('content')
    @if($product->banner)
        <div class="ui one column centered grid">
            <div class="row">
                <div class="banner">
                    <img src="//{{ env('QINIU_HOST').$product->banner }}" alt=""/>
                </div>
            </div>
        </div>
    @elseif($product->video_mp4)
    <!-- Swiper,产品专用swiper -->
    <section class="vide" style="margin-top: 44px;">
        <div id="block2" style="width: 100%; height: 500px;"
             data-vide-bg="mp4: //{{ env('QINIU_HOST') . $product->video_mp4 }}, webm: //{{ env('QINIU_HOST') . $product->video_webm }}, ogv: //{{ env('QINIU_HOST') . $product->video_ogv }}, poster: //{{ env('QINIU_HOST') . $product->video_img }}"
             data-vide-options="position: 0% 50%">
        </div>
    </section>
    @endif
    <div class="ui segments ross_segments"></div>
    {{--产品详情--}}
    <div class="ui text container">
        <div class="row">
            <!-- JiaThis Button BEGIN -->
            <div class="jiathis_style_32x32">
                <a class="jiathis_button_qzone"></a>
                <a class="jiathis_button_tsina"></a>
                <a class="jiathis_button_tqq"></a>
                <a class="jiathis_button_weixin"></a>
                <a class="jiathis_button_renren"></a>
                <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
                <a class="jiathis_counter_style"></a>
            </div>
            <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
            <!-- JiaThis Button END -->
        </div>
        <p>
            @if(session('lan') == 'EN'  && $product->intro_en)
                {!! $product->intro_en !!}
            @else
                {!! $product->intro !!}
            @endif
        </p>

                {{--<div class="card center"  >--}}
                    {{--<div class="card-image center" style="height: 500px; overflow: hidden">--}}
                        {{--<img src="//{{ env('QINIU_HOST') . $item->imgs }}">--}}
                    {{--</div>--}}
                {{--</div>--}}
    </div>
    <div class="ui segments ross_segments"></div>
    <div class="ui segments ross_segments"></div>
    {{--产品详情.end--}}

@stop
