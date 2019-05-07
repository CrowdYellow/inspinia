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
            @guest
                <li>
                    <a href="{{ route('login') }}"> 登陆 </a>
                </li>
                <li>
                    <a href="{{ route('register') }}"> 注册 </a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a
                            id="navbarDropdown"
                            class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('退出登录') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
        </ul>
    </div>
</nav>