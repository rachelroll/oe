@component('mail::message')
# 客户留言信息

姓名:{{ $data['name'] }}<br>
联系方式:{{ $data['name'] }}<br>
留言内容:{{ $data['name'] }}<br>
型号:{{ $data['name'] }}<br>
时间:{{ \Carbon\Carbon::now()->toDateTimeString() }}<br>



{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
