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
                    <form class="m-t" role="form" action="">
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" placeholder="用户名" required="" name="name">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="密码" required="">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">登录</button>
                        <a href="#">
                            <small>忘记密码?</small>
                        </a>
                        <p class="text-muted text-center">
                            <small>还没有账号?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="">创建一个帐户</a>
                    </form>
                    <p class="m-t">
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>