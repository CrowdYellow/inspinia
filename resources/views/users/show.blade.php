@extends('layouts.app')
@section('title', $user->name . ' 的个人中心')
@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="ibox float-e-margins">
                <div>
                    <div class="ibox-content no-padding border-left-right">
                        <img alt="{{ $user->name }}" class="img-responsive" src="{{ asset($user->avatar) }}">
                    </div>
                    <div class="ibox-content profile-content">
                        <h4 title="用户名"><strong>{{ $user->name }}</strong></h4>
                        <p title="地址"><i class="fa fa-map-marker"></i> {{ $user->address }}</p>
                        <h5>个人介绍</h5>
                        <p>{{ $user->introduction }}</p>
                        <h5>注册时间</h5>
                        <p title="{{ $user->created_at }}">{{ $user->created_at->diffForHumans() }}</p>
                        <div class="row m-t-lg">
                            <div class="col-md-4">
                                <span class="bar">5,3,9,6,5,9,7,3,5,2</span>
                                <h5><strong>{{ $user->article_count }}</strong> 文章</h5>
                            </div>
                            <div class="col-md-4">
                                <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                                <h5><strong>{{ $user->follow_count }}</strong> 关注</h5>
                            </div>
                            <div class="col-md-4">
                                <span class="bar">5,3,2,-1,-3,-2,2,3,5,2</span>
                                <h5><strong>{{ $user->fans }}</strong> 粉丝</h5>
                            </div>
                        </div>
                        <div class="user-button">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary btn-sm btn-block">
                                        <i class="fa fa-envelope"></i> 私聊
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-default btn-sm btn-block">
                                        <i class="fa fa-heart"></i> 关注
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>我的动态</h5>
                </div>
                <div class="ibox-content">

                    <div>
                        <div class="feed-activity-list">

                            <div class="feed-element">
                                <a href="#" class="pull-left">
                                    <img alt="image" class="img-circle" src="/img/a1.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">1分钟前</small>
                                    <strong>小明 </strong> 时间是一切财富中最宝贵的财富 <br>
                                    <small class="text-muted">今天下午2017.12.12 4:21 </small>
                                    <div class="actions">
                                        <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> 赞 </a>
                                        <a class="btn btn-xs btn-danger"><i class="fa fa-heart"></i> 喜欢</a>
                                    </div>
                                </div>
                            </div>

                            <div class="feed-element">
                                <a href="#" class="pull-left">
                                    <img alt="image" class="img-circle" src="/img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">5分钟前</small>
                                    <strong>小明 </strong> 时间是一切财富中最宝贵的财富 <br>
                                    <small class="text-muted">今天下午2017.12.12 4:21 </small>
                                </div>
                            </div>

                            <div class="feed-element">
                                <a href="#" class="pull-left">
                                    <img alt="image" class="img-circle" src="/img/a2.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">2小时前</small>
                                    <strong>小明 </strong> 时间是一切财富中最宝贵的财富 <br>
                                    <small class="text-muted">今天下午2017.12.12 4:21 </small>
                                    <div class="well">
                                        我需要三件东西：爱情友谊和图书。然而这三者之间何其相通！炽热的爱情可以充实图书的内容，图书又是人们最忠实的朋友。
                                    </div>
                                    <div class="pull-right">
                                        <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> 赞 </a>
                                        <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> 喜欢</a>
                                        <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> 信息</a>
                                    </div>
                                </div>
                            </div>
                            <div class="feed-element">
                                <a href="#" class="pull-left">
                                    <img alt="image" class="img-circle" src="/img/a3.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">2小时前</small>
                                    <strong>小明 </strong> 时间是一切财富中最宝贵的财富 <br>
                                    <small class="text-muted">今天下午2017.12.12 4:21 </small>
                                    <div class="photos">
                                        <a target="_blank" href="http://24.media.tumblr.com/20a9c501846f50c1271210639987000f/tumblr_n4vje69pJm1st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="/img/p1.jpg"></a>
                                        <a target="_blank" href="http://37.media.tumblr.com/9afe602b3e624aff6681b0b51f5a062b/tumblr_n4ef69szs71st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="/img/p3.jpg"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="feed-element">
                                <a href="#" class="pull-left">
                                    <img alt="image" class="img-circle" src="/img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5小时前</small>
                                    <strong>小明 </strong> 时间是一切财富中最宝贵的财富 <br>
                                    <small class="text-muted">今天下午2017.12.12 4:21 </small>
                                    <div class="actions">
                                        <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> 赞 </a>
                                        <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> 喜欢</a>
                                    </div>
                                </div>
                            </div>
                            <div class="feed-element">
                                <a href="#" class="pull-left">
                                    <img alt="image" class="img-circle" src="/img/a5.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">2小时前</small>
                                    <strong>小明 </strong> 时间是一切财富中最宝贵的财富 <br>
                                    <small class="text-muted">今天下午2017.12.12 4:21 </small>
                                    <div class="well">
                                        我需要三件东西：爱情友谊和图书。然而这三者之间何其相通！炽热的爱情可以充实图书的内容，图书又是人们最忠实的朋友。
                                    </div>
                                    <div class="pull-right">
                                        <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                    </div>
                                </div>
                            </div>
                            <div class="feed-element">
                                <a href="#" class="pull-left">
                                    <img alt="image" class="img-circle" src="/img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23小时前</small>
                                    <strong>小明 </strong> 时间是一切财富中最宝贵的财富 <br>
                                    <small class="text-muted">今天下午2017.12.12 4:21 </small>
                                </div>
                            </div>
                            <div class="feed-element">
                                <a href="#" class="pull-left">
                                    <img alt="image" class="img-circle" src="/img/a7.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">46小时前</small>
                                    <strong>小明 </strong> 时间是一切财富中最宝贵的财富 <br>
                                    <small class="text-muted">今天下午2017.12.12 4:21 </small>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> 显示更多</button>

                    </div>

                </div>
            </div>
        </div>
    </div>
@stop
