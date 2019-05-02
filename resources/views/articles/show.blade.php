@extends('layouts.app')
@section('style')
    <link href="{{ asset('css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
@stop
@section('content')
    <div class="animated fadeInRight article">
        <div class="row">
            <div class="col-md-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>资料详情</h5>
                    </div>
                    <div>
                        <div class="ibox-content no-padding border-left-right">
                            <img alt="image" class="img-responsive" src="http://cn.inspinia.cn/html/inspiniaen/img/profile_big.jpg">
                        </div>
                        <div class="ibox-content profile-content">
                            <h4><strong>小明</strong></h4>
                            <p><i class="fa fa-map-marker"></i> 北京 123/123</p>
                            <h5>
                                我的简介
                            </h5>
                            <p>
                                这个家伙很懒，什么都不想告诉你！
                            </p>
                            <div class="row m-t-lg">
                                <div class="col-md-4">
                                    <span class="bar">5,3,9,6,5,9,7,3,5,2</span>
                                    <h5><strong>169</strong> 帖子</h5>
                                </div>
                                <div class="col-md-4">
                                    <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                                    <h5><strong>28</strong> 好友</h5>
                                </div>
                                <div class="col-md-4">
                                    <span class="bar">5,3,2,-1,-3,-2,2,3,5,2</span>
                                    <h5><strong>240</strong> 关注</h5>
                                </div>
                            </div>
                            <div class="user-button">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> 发送信息</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> 请喝咖啡</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="pull-right">
                            <button class="btn btn-white btn-xs" type="button">标签</button>
                            <button class="btn btn-white btn-xs" type="button">标签</button>
                            <button class="btn btn-white btn-xs" type="button">标签</button>
                        </div>
                        <div class="text-center article-title">
                            <h1>
                                时间从何而来？为什么时间似乎是流动的？
                            </h1>
                            <span class="text-muted">
                                <i class="fa fa-clock-o"></i> 2017年10月28日
                                | <i class="fa fa-comments-o"> </i> 56 评论
                                | <i class="fa fa-eye"> </i> 144 查看
                            </span>
                        </div>
                        <p>
                            在我们看来，宇宙万物皆是永恒变化的，所以我们产生了时间的概念。通过时间，我们可以研究事物的变化。然而，关于时间的本质，还有待我们进一步探究。
                        </p>
                        <p>
                            时间流动是真实还是错觉？<br>
                            之所以有些人认为时间流动是错觉，是因为当人们停下来思考时，无法理解时间流动究竟意味着什么。我们常说时间就像河流一样流动，这样的意思是河流的水在某一时刻处于与前一时刻不同的地方。换言之，水相对于时间移动。然而，时间并不能随着时间而流动，时间就是时间。

                            很多人误以为时间不流动就是意味着没有时间，时间不存在。然而，这是无稽之谈。时间当然存在，我们用时钟来测量它。时钟不是测量时间的流逝，而是测量时间的间隔。在事件之间存在时间间隔，这就是时钟所测量的。
                        </p>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-success btn-sm"> 编辑 </button>
                                <button class="btn btn-danger btn-sm demo4"> 删除 </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>评论:</h2>
                            {{--回复列表--}}
                            @include('articles._replies_list')
                        </div>
                    </div>
                    {{--回复框--}}
                    @include('articles._replies_form')
                </div>
            </div>
        </div>
    </div>
@stop
@section('script')
<script src="{{ asset('js/plugins/sweetalert/sweetalert.min.js') }}"></script>
<script>
    $('.demo4').click(function () {
        swal({
                title: "你确定？",
                text: "该文件将被删除！",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "删除",
                cancelButtonText: "取消",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function (isConfirm) {
                if (isConfirm) {
                    swal("删除", "您的虚构文件已被删除.", "success");
                } else {
                    swal("取消", "你的虚构文件是安全的:)", "error");
                }
            });
    });
</script>
@stop