<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BBS')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    @yield('style')
    <style>
        .notification {
            line-height: 12px;
            padding: 2px 5px;
            border-radius: .25em;
        }
    </style>
</head>
<body class="top-navigation" onload="pagesLoad()">
<div id="wrapper">
    <div class="mask" id="mask">
        <div class="sk-spinner sk-spinner-three-bounce" style="margin-top: 500px;">
            <div class="sk-bounce1"></div>
            <div class="sk-bounce2"></div>
            <div class="sk-bounce3"></div>
        </div>
    </div>
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg">
            <div class="container">
                @include('layouts._header')
            </div>
        </div>
        <div class="wrapper wrapper-content">
            <div class="container">
                @yield('content')
            </div>
        </div>
        @include('layouts._footer')
    </div>
</div>
<!-- Mainly scripts -->
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('js/inspinia.js') }}"></script>
<script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>

<!-- Flot -->
<script src="{{ asset('js/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.resize.js') }}"></script>

<!-- Peity -->
<script src="{{ asset('js/plugins/peity/jquery.peity.min.js') }}"></script>
<!-- Peity demo -->
<script src="{{ asset('js/demo/peity-demo.js') }}"></script>
<script>
    function pagesLoad() {
        if(document.readyState === 'complete'){
            //隐藏loading效果
            $('#mask').css('display', 'none');
        }
    }
</script>
@yield('script')
@include('shared._message')
</body>
</html>