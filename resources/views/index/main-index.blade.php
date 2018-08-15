<script   language=javascript>

    var lan = "{{ session('lan') }}";
    var sysLan = (navigator.language || navigator.browserLanguage).toLowerCase();

    if(sysLan != 'zh-cn'  && !lan) {
        window.location.href="{{ route('en.index') }}";
    } else if(!lan) {
        window.location.href="{{ route('cn.index') }}";
    }
</script>