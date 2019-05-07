<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登陆</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="bg-image">

<div class="loginColumns animated fadeInDown">
    <div class="row pt-5">
        <div class="col-md-6 col-lg-offset-3 pt-5">
            <div class="pt-5">
                <div class="ibox-content">
                    <div class="row">
                        <h1 class="text-center font-bold">欢迎您的到来</h1>
                    </div>
                    <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group {{ $errors->has('account') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" placeholder="用户名/手机号" required="" name="account">
                            @if ($errors->has('account'))
                                <label id="-error" class="error" for="">{{ $errors->first('account') }}</label>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="form-control" placeholder="密码" required="" name="password">
                            @if ($errors->has('password'))
                                <label id="-error" class="error" for="">{{ $errors->first('password') }}</label>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
                            <input autocomplete="off" id="captcha" type="text" class="form-control" placeholder="验证码" required="" name="captcha">

                            <img class="thumbnail captcha mt-3 mb-2" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" alt="点击图片重新获取验证码">

                            @if ($errors->has('captcha'))
                                <label id="captcha" class="error" for="">{{ $errors->first('captcha') }}</label>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">登录</button>
                        <a href="#">
                            <small>忘记密码?</small>
                        </a>
                        <p class="text-muted text-center">
                            <small>还没有账号?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">创建一个帐户</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>