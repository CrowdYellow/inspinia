<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSPINIA | Dashboard v.4</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="top-navigation">
<div id="wrapper">
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg">
            <div class="container">
                <nav class="navbar navbar-static-top" role="navigation">
                    <div class="navbar-header">
                        <button
                                aria-controls="navbar"
                                aria-expanded="false"
                                data-target="#navbar"
                                data-toggle="collapse"
                                class="navbar-toggle collapsed"
                                type="button">
                            <i class="fa fa-reorder"></i>
                        </button>
                        <a href="#" class="navbar-brand">Inspinia</a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a
                                        aria-expanded="false"
                                        role="button"
                                        href="#"
                                        class="dropdown-toggle"
                                        data-toggle="dropdown"> 菜单 <span class="caret"></span>
                                </a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="">菜单</a></li>
                                    <li><a href="">菜单</a></li>
                                    <li><a href="">菜单</a></li>
                                    <li><a href="">菜单</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a
                                        aria-expanded="false"
                                        role="button"
                                        href="#"
                                        class="dropdown-toggle"
                                        data-toggle="dropdown"> 菜单 <span class="caret"></span>
                                </a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="">菜单</a></li>
                                    <li><a href="">菜单</a></li>
                                    <li><a href="">菜单</a></li>
                                    <li><a href="">菜单</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a
                                        aria-expanded="false"
                                        role="button"
                                        href="#"
                                        class="dropdown-toggle"
                                        data-toggle="dropdown"> 菜单 <span class="caret"></span>
                                </a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="">菜单</a></li>
                                    <li><a href="">菜单</a></li>
                                    <li><a href="">菜单</a></li>
                                    <li><a href="">菜单</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a
                                        aria-expanded="false"
                                        role="button"
                                        href="#"
                                        class="dropdown-toggle"
                                        data-toggle="dropdown"> 菜单 <span class="caret"></span>
                                </a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="">菜单</a></li>
                                    <li><a href="">菜单</a></li>
                                    <li><a href="">菜单</a></li>
                                    <li><a href="">菜单</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <a href=""> 登陆 </a>
                            </li>
                            <li>
                                <a href=""> 注册 </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="wrapper wrapper-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="animated fadeInRight">
                            <div class="ibox-content forum-post-container">
                                <div class="forum-post-info">
                                    <h4><span class="text-navy"><i class="fa fa-globe"></i> 主要板块</span> - 公告 - <span class="text-muted">自由谈判</span></h4>
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
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2017
            </div>
        </div>
    </div>
</div>
<!-- Mainly scripts -->
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('js/inspinia.js') }}"></script>
<script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>

<!-- Flot -->
<script src="{{ asset('js/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.resize.js') }}"></script>

<!-- Peity -->
<script src="{{ asset('js/plugins/peity/jquery.peity.min.js') }}"></script>
<!-- Peity demo -->
<script src="{{ asset('js/demo/peity-demo.js') }}"></script>
</body>
</html>
