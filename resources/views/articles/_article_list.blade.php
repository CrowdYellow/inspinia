@if (count($articles))
    @foreach($articles as $article)
        <div class="media">
            <div class="media-right">
                <a href="">
                    <img src="{{ asset('images/sx/02niu.png') }}" alt="name" width="60">
                </a>
            </div>
            <div class="media-body pl-3">
                <a href="" class="btn-link">
                    <h2>
                        时间从何而来？为什么时间似乎是流动的？
                    </h2>
                </a>
                <div class="small m-b-xs">
                    <strong><i class="fa fa-user"> </i> 火星一号</strong> |
                    <span class="text-muted"><i class="fa fa-clock-o"> </i> 2017年12月12日</span> |
                    <span class="text-muted"><i class="fa fa-comments-o"> </i> 56 评论</span> |
                    <span class="text-muted"><i class="fa fa-eye"> </i> 144 浏览</span>
                </div>
            </div>
            <div class="media-bottom pt-3">
                <div class="col-md-12">
                    <button class="btn btn-primary btn-xs" type="button">标签</button>
                    <button class="btn btn-primary btn-xs" type="button">标签</button>
                </div>
            </div>
        </div>
        @if ( ! $loop->last)
            <hr>
        @endif
    @endforeach
@else
    <div class="empty-block">暂无数据 ~_~ </div>
@endif