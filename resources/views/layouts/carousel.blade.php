@if(count($carousels))
    <div class="swiper-container"  style="margin-top: 44px;">
        <div class="swiper-wrapper">
            @foreach($carousels as $carousel)
                <div class="swiper-slide">
                    <a href="{{ route('product.show',['id'=>$carousel->url]) }}"><img src="//{{ env('QINIU_HOST') . $carousel->img }}" alt=""/></a>
                </div>
            @endforeach
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

@endif
<!--Swiper.end-->