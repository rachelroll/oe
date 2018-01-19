@extends('layouts.master')

@include('layouts.carousel')
@section('content')
    <div class="ui text container">
                    {!! $foot->info !!}
            </div>
        </div>
    </div>
@stop
@section('js')
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            // effect: 'fade',
            autoplay: {
                delay: 4000
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            autoHeight: true
        });
    </script>
@stop
