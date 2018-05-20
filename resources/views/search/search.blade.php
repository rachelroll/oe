@extends('layouts.master')
@section('nav-bar')
    @include('layouts.nav-fixed')
@stop
@section('content')
    <div class="ui centered grid">
        <div class="six wide tablet eight wide computer column">
            {{--新品速递--}}
                    <div class="ross_divided">
                        <div class="ui vertically divided grid">
                            <div class="ui container stackable">
                                <div class="row">
                                    <h1 style="color: #1678c2 !important;">搜索结果</h1>
                                </div>
                            </div>
                            <div class="two column row">
                            </div>
                        </div>
                    </div>
                    @if(count($products))
                <div style="padding-top: 20px; padding-bottom: 80px;">
                    <div class="ui container three cards link stackable">
                        @foreach($products as $product)
                            <div class="card">
                                <a class="image" href="{{ route('product.show',['id'=>$product->id]) }}">
                                    <img src="//{{ env('QINIU_HOST').$product->cover }}">
                                </a>

                                <div class="content">
                                    <div class="header">{{ $product->model }}</div>
                                    <div class="meta">
                                        <a>{{ $product->name }}</a>
                                    </div>
                                    <div class="description">
                                        {{ $product->intro_title }}
                                    </div>
                                </div>
                                <div class="extra content">
                                    @if($product->buy_url)
                                        <a class="ui green button" href="{{ $product->buy_url }}" target="_blank">
                                            京东
                                        </a>
                                    @endif
                                    @if($product->tm_url)
                                        <a class="ui red button" href="{{ $product->tm_url }}" target="_blank">
                                            天猫
                                        </a>
                                    @endif
                                </div>
                                <div class="extra content">
                                    <span>评级</span>
                                    <div class="ui star rating">
                                        @if($product->rating)
                                            @for ($i = 0; $i < $product->rating; $i++)
                                                <i class="icon active"></i>
                                            @endfor
                                            @for ($i = 0; $i < (5-$product->rating); $i++)
                                                <i class="icon"></i>
                                            @endfor
                                        @else
                                            <i class="icon"></i>
                                            <i class="icon"></i>
                                            <i class="icon"></i>
                                            <i class="icon"></i>
                                            <i class="icon"></i>
                                        @endif
                                    </div>
                                    <div class="ui labeled button right floated" tabindex="0">
                                        @if($product->price)
                                            <div class="ui basic left pointing blue label">
                                                <span>¥{{ number_format($product->price,2) }}</span>
                                            </div>
                                        @else
                                            <div class="ui basic left pointing blue label message">
                                                <span>留言询价</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                    @else
                    <div style="padding-top: 120px; padding-bottom: 120px;">
                        <h3 class="ui header">并没有相关产品</h3>
                    </div>
                    @endif
            {{--新品速递.end--}}
        </div>
    </div>
@stop
@section('js')
    <script>
        $('.message').on('click', function () {
            var model = $(this).attr('key');
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
                                    value: val,
                                    model:model
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
    </script>
    @stop