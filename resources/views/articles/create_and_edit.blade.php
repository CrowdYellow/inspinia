@extends('layouts.app')
@section('style')
    <link href="{{ asset('css/plugins/select2/select2.min.css') }}" rel="stylesheet">
    <style>
        .select2-container--default .select2-selection--multiple {
            background-color: #FFFFFF;
            background-image: none;
            border: 1px solid #e5e6e7;
            border-radius: 1px;
            color: inherit;
            display: block;
            padding: 1px 6px;
            transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
            width: 100%;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #1ab394;
            color: white;
            border: 0;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-weight: bold;
            margin-right: 2px;
        }
        .select2-container--default.select2-container--focus .select2-selection--multiple{
           border-color: #1ab394 !important;
       }
    </style>
@stop
@section('content')
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="ibox float-e-margins">
                <div class="ibox-title text-center">
                    @if(isset($article))
                        <h2><i class="fa fa-edit"> </i> 编辑文章</h2>
                    @else
                        <h2><i class="fa fa-edit"> </i> 添加文章</h2>
                    @endif
                </div>
                <div class="ibox-content">
                    <form method="post" class="form-horizontal" action="">
                        @csrf
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label class="col-sm-1 control-label">标题:</label>
                            <div class="col-sm-11">
                                <input
                                        type="text"
                                        class="form-control"
                                        name="title"
                                        id="title"
                                        {{--value="{{ old('title', $article->title ) }}"--}}
                                        value="{{ old('title') }}"
                                        placeholder="标题">
                                @if ($errors->has('title'))
                                    <label id="-error" class="error" for="">{{ $errors->first('title') }}</label>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">话题:</label>
                            <div class="col-sm-11">
                                <select name="" id="" class="topics-select form-control" multiple="multiple">
                                    {{--@foreach(old('topics', $article->topics ) as $topic)--}}
                                        {{--<option value="{{ $topic->id }}" selected="selected">{{ $topic->name }}</option>--}}
                                    {{--@endforeach--}}
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                            <label class="col-sm-1 control-label">分类:</label>
                            <div class="col-sm-11">
                                <select name="category_id" id="" class="form-control m-b">
                                    <option>选项 1</option>
                                    <option>选项 2</option>
                                    <option>选项 3</option>
                                    <option>选项 4</option>
                                </select>
                                @if ($errors->has('category_id'))
                                    <label id="-error" class="error" for="">{{ $errors->first('category_id') }}</label>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-white" type="submit">取消</button>
                                <button class="btn btn-primary" type="submit">保存更改</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('js/plugins/select2/select2.full.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // $(".select2_demo_2").select2({
            //     placeholder: "选择相关话题",
            //     allowClear: true
            // });
            function formatTopic (topic) {
                return "<div class='select2-result-repository clearfix'>" +
                "<div class='select2-result-repository__meta'>" +
                "<div class='select2-result-repository__title'>" +
                topic.name ? topic.name : "Laravel"   +
                    "</div></div></div>";
            }
            function formatTopicSelection (topic) {
                return topic.name || topic.text;
            }
            $(".topics-select").select2({
                tags: true,
                placeholder: '选择相关话题',
                minimumInputLength: 2,
                ajax: {
                    url: '/api/topics',
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term
                        };
                    },
                    processResults: function (data, params) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                },
                templateResult: formatTopic,
                templateSelection: formatTopicSelection,
                escapeMarkup: function (markup) { return markup; }
            });
        });
    </script>
@stop