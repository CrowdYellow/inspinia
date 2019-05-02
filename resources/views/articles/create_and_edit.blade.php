@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="animated fadeInRight">
                <div class="ibox-content forum-post-container">
                    <div class="forum-post-info">
                        <h4>
                            <span class="text-navy"><i class="fa fa-globe"></i> 主要板块</span>
                            - 公告 - <span class="text-muted">自由谈判</span>
                        </h4>
                    </div>
                    <div class="media">
                        <a class="forum-avatar" href="">
                            <img src="{{ asset('img/a1.jpg') }}" class="img-circle" alt="image">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">时间从何而来？为什么时间似乎是流动的？</h4>
                            在我们看来，宇宙万物皆是永恒变化的，所以我们产生了时间的概念。通过时间，我们可以研究事物的变化。然而，关于时间的本质，还有待我们进一步探究。
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection