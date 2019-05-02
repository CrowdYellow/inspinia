@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-9">
            <div class="animated fadeInRight">
                <div class="ibox-content forum-post-container">
                    <button type="button" class="btn btn-white">最新</button>
                    <button type="button" class="btn btn-white">点赞</button>
                    <button type="button" class="btn btn-white">活跃</button>
                    <button type="button" class="btn btn-white">评论</button>
                    <hr>
                    <div class="media">
                        <a class="forum-avatar" href="">
                            <img src="{{ asset('img/a1.jpg') }}" class="img-circle" alt="image">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">时间从何而来？为什么时间似乎是流动的？</h4>
                            在我们看来，宇宙万物皆是永恒变化的，所以我们产生了时间的概念。通过时间，我们可以研究事物的变化。然而，关于时间的本质，还有待我们进一步探究。
                        </div>
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
                    <div class="media">
                        <a class="forum-avatar" href="">
                            <img src="{{ asset('img/a1.jpg') }}" class="img-circle" alt="image">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">时间从何而来？为什么时间似乎是流动的？</h4>
                            在我们看来，宇宙万物皆是永恒变化的，所以我们产生了时间的概念。通过时间，我们可以研究事物的变化。然而，关于时间的本质，还有待我们进一步探究。
                        </div>
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
                    <div class="btn-group">
                        <button type="button" class="btn btn-white"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-white">1</button>
                        <button class="btn btn-white  active">2</button>
                        <button class="btn btn-white">3</button>
                        <button class="btn btn-white">4</button>
                        <button type="button" class="btn btn-white"><i class="fa fa-chevron-right"></i> </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="media">
                        <div class="media-heading border-bottom">推荐</div>
                        <div class="media-body">推荐</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection