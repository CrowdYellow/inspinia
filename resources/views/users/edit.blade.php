@extends('layouts.app')
@section('title', $user->name . ' 的个人中心')
@section('content')
    <div class="row">
        <div class="col-md-3">
            246456464
        </div>
        <div class="col-md-9">
            <div class="ibox float-e-margins">
                <div class="ibox-title text-center">
                    <h2><i class="fa fa-edit"> </i> 编辑用户</h2>
                </div>
                <div class="ibox-content">
                    <form method="post" class="form-horizontal" action="{{ route('users.update', $user->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-sm-2 control-label">用户名:</label>
                            <div class="col-sm-10">
                                <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        value="{{ old('name', $user->name ) }}"
                                        placeholder="用户名">
                                @if ($errors->has('name'))
                                    <label id="-error" class="error" for="">{{ $errors->first('name') }}</label>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">手机号:</label>
                            <div class="col-sm-10">
                                <input
                                        type="text"
                                        class="form-control"
                                        name="phone"
                                        value="{{ old('phone', $user->phone ) }}"
                                        readonly
                                        placeholder="手机号">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">地址:</label>
                            <div class="col-sm-10">
                                <input
                                        type="text"
                                        class="form-control"
                                        name="phone"
                                        value="{{ old('address', $user->address ) }}"
                                        placeholder="地址:四川/成都">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">地址:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="introduction" id="" cols="30" rows="10">{{ old('introduction', $user->introduction ) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">保存更改</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop