<div id="kratos-header">
    <header id="kratos-header-section">
        <div class="container">
            <div class="nav-header">
                <nav id="kratos-menu-wrap" class="menu-main-container">
                    <ul id="kratos-primary-menu" class="sf-menu">
                        <li class="current-menu-item"><a href="{{route('web')}}" aria-current="page"><i
                                        class="fa fa-home"></i> 首页</a></li>
                        <li><a><i class="fa fa-archive"></i> 文章分类</a>
                            <ul class="sub-menu">

                                @foreach($cate as $cates)
                                <li><a href="/category/{{$cates->cate_name}}">{{$cates->cate_name}}</a></li>
                                    @endforeach
                            </ul>
                        </li>
                        <li><a><i class="fa fa-dashboard"></i> 功能</a>
                            <ul class="sub-menu">
                                <li><a href="http://coolr.top/wp-login.php?action=register">注册</a></li>
                                <li>
                                    <a href="{{route('auth.qq')}}">登录</a>
                                </li>
                                <li><a target="_blank" rel="noopener noreferrer"
                                       href="https://outlook.com/?realm=moedog.org">邮箱</a></li>
                                <li><a target="_blank" rel="noopener noreferrer"
                                       href="https://status.moedog.org/">状态</a></li>
                            </ul>
                        </li>
                        <li><a href="http://coolr.top/friends.html"><i class="fa fa-mars"></i> 友链</a></li>
                        <li><a href="http://coolr.top/guestbook.html"><i class="fa fa-pencil"></i> 留言</a></li>
                        <li><a target="_blank" rel="noopener noreferrer" href="{{route('auth.qq')}}"><i class="fa fa-rocket"></i> login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</div>
<div class="kratos-start kratos-hero-2">
    <div class="kratos-overlay"></div>
    <div class="kratos-cover kratos-cover_2 text-center">
        <div class="desc desc2 animate-box">
            <a href="http://coolr.top">
                <h2>@yield('article_title')</h2><br>
                <span>@yield('desc')</span>
                </a>
        </div>
    </div>
</div>