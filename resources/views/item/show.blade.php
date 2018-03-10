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
        <p>
            {!! $product->intro !!}
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
