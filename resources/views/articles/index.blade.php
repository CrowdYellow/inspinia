@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-9">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">
                        <button type="button" class="btn btn-white">最新</button>
                        <button type="button" class="btn btn-white">点赞</button>
                        <button type="button" class="btn btn-white">活跃</button>
                        <button type="button" class="btn btn-white">评论</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">
                        @include('articles._article_list', ['articles' => $articles])
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content">48978454565</div>
            </div>
        </div>
    </div>
@endsection