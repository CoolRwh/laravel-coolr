<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>{{$title}}</title>

    <link rel='stylesheet' id='fontawe-css' href='/static/web/css/font-awesome.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='kratos-css' href='/static/web/css/kratos.min.css' type='text/css' media='all'/>
    <!-- Analytics by WP-Statistics v12.6.11 - https://wp-statistics.com/ -->
    <script type='text/javascript' src='/static/web/js/jquery.min.js'></script>
    <style>#offcanvas-menu {
            background: rgba(42, 42, 42, .9)
        }

        .affix {
            /*top: 61px*/
            top: 10px
        }

        .kratos-cover.kratos-cover_2 {
            /*background-image: url(/static/web/images/site_head.png)*/
            /*   background-image: url(https://w.wallhaven.cc/full/mp/wallhaven-mp7dkm.png)*/
            background-image: url(https://w.wallhaven.cc/full/5w/wallhaven-5ww817.png)
        }

        @media (max-width: 768px) {
            .kratos-cover.kratos-cover_2 {
                background-image: url(/static/web/images/site_head_mobi.png)
            }
        }    </style>
</head>
<body>
<div id="kratos-wrapper">
    <div id="kratos-page">
        <div id="kratos-header">
            <header id="kratos-header-section">
                <div class="container">
                    <div class="nav-header">
                        <nav id="kratos-menu-wrap" class="menu-main-container">
                            <ul id="kratos-primary-menu" class="sf-menu">
                                <li class="current-menu-item"><a href="http://coolr.top" aria-current="page"><i
                                                class="fa fa-home"></i> 首页</a></li>
                                <li><a><i class="fa fa-archive"></i> 文章</a>
                                    <ul class="sub-menu">
                                        @section('content')
                                            @foreach ($cate as $v)
                                                <li><a href="{{$v['url']}}">{{$v['name']}}</a></li>
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
                                <li><a><i class="fa fa-cogs"></i> 工具</a>
                                    <ul class="sub-menu">
                                        <li><a target="_blank" rel="noopener noreferrer" href="https://api.fczbl.vip/">API</a>
                                        </li>
                                        <li><a target="_blank" rel="noopener noreferrer" href="https://kms.loli.beer/">KMS
                                                服务</a></li>
                                        <li><a target="_blank" rel="noopener noreferrer" href="https://mso.moedog.org/">MSO
                                                365</a></li>
                                        <li><a target="_blank" rel="noopener noreferrer"
                                               href="http://coolr.top/google/">Google</a></li>
                                        <li><a target="_blank" rel="noopener noreferrer"
                                               href="http://coolr.top/musicplayer/">在线音乐台</a></li>
                                        <li><a target="_blank" rel="noopener noreferrer"
                                               href="http://coolr.top/mikutap/">Mikutap</a></li>
                                    </ul>
                                </li>
                                <li><a target="_blank" rel="noopener noreferrer" href="https://shop.moedog.org/"><i class="fa fa-shopping-cart"></i> 商店</a></li>
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
                    <a href="http://coolr.top"><h2>十清凉</h2><br><span>A little white programmer in Chengdu</span></a>
                </div>
            </div>
        </div>


        <div id="kratos-blog-post" style="background:#f5f5f5">
            <div id="container" class="container">
                <div class="row">


                    <section id="main" class="col-md-8">
                        @section('content')

                            <article class="kratos-hentry clearfix">
                                <div class="kratos-entry-border-new clearfix">
                                    <div class="kratos-entry-thumb-new">
                                        <a href="http://coolr.top/1236.html"><img src="https://w.wallhaven.cc/full/mp/wallhaven-mp7dkm.png"
                                                                                  alt="贺 建站一千日整"></a></div>
                                    <div class="kratos-post-inner-new">
                                        <header class="kratos-entry-header-new">
                                            <a class="label" href="http://coolr.top/category/daily">日常杂谈</a>
                                            <h2 class="kratos-entry-title-new"><a href="http://coolr.top/1236.html">贺
                                                    建站一千日整</a></h2>
                                        </header>
                                        <div class="kratos-entry-content-new">
                                            <p>想要什么福利？打扰了，没有。但是欢迎给我打钱。 首先这个月，我变成了一个 DD，开始看各种 VTuber
                                                了，啊！老婆们真可爱啊！先定个小目标，把哔站直播间的牌子都刷到十级。 然后抽了点时间做了下 Office Tool&hellip;</p>
                                        </div>
                                    </div>
                                    <div class="kratos-post-meta-new">
        <span class="pull-left">
            <a><i class="fa fa-calendar"></i> 2019-10-22</a>
            <a href="http://coolr.top/1236.html#comments"><i class="fa fa-commenting-o"></i> 35条评论</a>
        </span>
                                        <span class="visible-lg visible-md visible-sm pull-left">
            <a href="http://coolr.top/1236.html"><i class="fa fa-eye"></i> 2.73k次阅读</a>
            <a href="javascript:;" data-action="love" data-id="1236" class="Love"><i class="fa fa-thumbs-o-up"></i> 21人点赞</a>
            <a href="/?author=1"><i class="fa fa-user"></i> 小白-白</a>
        </span>
                                        <span class="pull-right">
            <a class="read-more" href="http://coolr.top/1236.html" title="阅读全文">阅读全文 <i
                        class="fa fa-chevron-circle-right"></i></a>
        </span>
                                    </div>
                                </div>
                            </article>
                            <div class='text-center' id='page-footer'>
                                <ul class='pagination'>
                                    <li class='active'><a href='http://coolr.top/'>1</a></li>
                                    <li><a href='http://coolr.top/page/2'>2</a></li>
                                    <li><a href='http://coolr.top/page/3'>3</a></li>
                                    <li><a href="http://coolr.top/page/2" class="next" title="下一页">&gt;</a></li>
                                    <li><a href="http://coolr.top/page/3" class="extend" title="尾页">&raquo;</a></li>
                                </ul>
                            </div>

                        @show

                    </section>



                    <aside id="kratos-widget-area" class="col-md-4 hidden-xs hidden-sm scrollspy">




                        <div id="sidebar" class="affix-top">

                            {{--  头像开始--}}
                            <aside id="kratos_about-2" class="widget widget_kratos_about clearfix">
                                <div class="photo-background">
                                    <div class="photo-background"
                                         style="background:url(/static/web/images/about.jpg) no-repeat center center;-webkit-background-size:cover;background-size:cover"></div>
                                </div>
                                <div class="photo-wrapper clearfix">
                                    <div class="photo-wrapper-tip text-center">
                                        <a href="http://coolr.top/wp-login.php?redirect_to=https%3A%2F%2Fmoedog.org"
                                           rel="nofollow"><img class="about-photo"
                                                               src="/static/web/images/480x480.jpg"
                                                               alt=""/></a>
                                    </div>
                                </div>
                                <div class="textwidget">
                                    <p class="text-center"><span style="font-size: 10pt;"> 咦？我是谁？我为什么会在这？<a
                                                    href="http://coolr.top/about.html">[关于]</a></span></p>
                                </div>
                            </aside>

                            {{--  头像结束--}}

                            {{--  头像开始--}}

                            <aside id="kratos_comments-2" class="widget widget_kratos_comments clearfix"><h4
                                        class="widget-title">最近评论</h4>
                                <div class="recentcomments">
                                    <li class="comment-listitem">
                                        <div class="comment-user"><span class="comment-avatar"><img alt=''
                                                                                                    src='/static/web/picture/05a64ac813864cb2a465a794db88530f.gif'
                                                                                                    srcset='https://gravatar.loli.net/avatar/bf32c0323f5296cc2d7631c3b1ed29c3?s=100&#038;d=mm&#038;r=g 2x'
                                                                                                    class='avatar avatar-50 photo'
                                                                                                    height='50'
                                                                                                    width='50'/></span>
                                            <div class="comment-author" title="无路赛">无路赛</div>
                                            <span class="comment-date">11 小时前 (12月04日)</span></div>
                                        <div class="comment-content-link"><a
                                                    href="http://coolr.top/guestbook.html/comment-page-33#comment-4458">
                                                <div class="comment-content">哦不对，是我搞错了，再舔一次好了ovo &hellip;</div>
                                            </a></div>
                                    </li>
                                    <li class="comment-listitem">
                                        <div class="comment-user"><span class="comment-avatar"><img alt=''
                                                                                                    src='/static/web/picture/05a64ac813864cb2a465a794db88530f.gif'
                                                                                                    srcset='https://gravatar.loli.net/avatar/bf32c0323f5296cc2d7631c3b1ed29c3?s=100&#038;d=mm&#038;r=g 2x'
                                                                                                    class='avatar avatar-50 photo'
                                                                                                    height='50'
                                                                                                    width='50'/></span>
                                            <div class="comment-author" title="无路赛">无路赛</div>
                                            <span class="comment-date">11 小时前 (12月04日)</span></div>
                                        <div class="comment-content-link"><a
                                                    href="http://coolr.top/guestbook.html/comment-page-33#comment-4457">
                                                <div class="comment-content">诶，自动给图片链接变成的功能移除了么</div>
                                            </a></div>
                                    </li>
                                    <li class="comment-listitem">
                                        <div class="comment-user"><span class="comment-avatar"><img alt=''
                                                                                                    src='/static/web/picture/05a64ac813864cb2a465a794db88530f.gif'
                                                                                                    srcset='https://gravatar.loli.net/avatar/bf32c0323f5296cc2d7631c3b1ed29c3?s=100&#038;d=mm&#038;r=g 2x'
                                                                                                    class='avatar avatar-50 photo'
                                                                                                    height='50'
                                                                                                    width='50'/></span>
                                            <div class="comment-author" title="无路赛">无路赛</div>
                                            <span class="comment-date">11 小时前 (12月04日)</span></div>
                                        <div class="comment-content-link"><a
                                                    href="http://coolr.top/guestbook.html/comment-page-33#comment-4456">
                                                <div class="comment-content">每日一舔（1/1） https://pb&hellip;</div>
                                            </a></div>
                                    </li>
                                    <li class="comment-listitem">
                                        <div class="comment-user"><span class="comment-avatar"><img alt=''
                                                                                                    src='/static/web/picture/8af413a521a9456fb0d10a463f6d4c07.gif'
                                                                                                    srcset='https://gravatar.loli.net/avatar/a539b5eae963858878cc35d41b731af4?s=100&#038;d=mm&#038;r=g 2x'
                                                                                                    class='avatar avatar-50 photo'
                                                                                                    height='50'
                                                                                                    width='50'/></span>
                                            <div class="comment-author" title="折影轻梦">折影轻梦</div>
                                            <span class="comment-date">4 天前 (11月30日)</span></div>
                                        <div class="comment-content-link"><a
                                                    href="http://coolr.top/1236.html/comment-page-2#comment-4449">
                                                <div class="comment-content">我博客居然有1200天了……</div>
                                            </a></div>
                                    </li>
                                    <li class="comment-listitem">
                                        <div class="comment-user"><span class="comment-avatar"><img alt=''
                                                                                                    src='/static/web/picture/06282909881642a6a6e8ad534aab5a09.gif'
                                                                                                    srcset='https://gravatar.loli.net/avatar/595f163b8443f5d4bfa0ad98b8c0a094?s=100&#038;d=mm&#038;r=g 2x'
                                                                                                    class='avatar avatar-50 photo'
                                                                                                    height='50'
                                                                                                    width='50'/></span>
                                            <div class="comment-author" title="QAQ我就是个萌新啊">QAQ我就是个萌新啊</div>
                                            <span class="comment-date">4 天前 (11月30日)</span></div>
                                        <div class="comment-content-link"><a
                                                    href="http://coolr.top/guestbook.html/comment-page-33#comment-4448">
                                                <div class="comment-content">用投喂金币尝试引起带佬的关注QAQ</div>
                                            </a></div>
                                    </li>
                                </div>
                            </aside>


                            <aside class="widget widget_kratos_poststab">
                                <ul id="tabul" class="nav nav-tabs nav-justified visible-lg">
                                    <li class="active"><span href="#newest" data-toggle="tab">最新文章</span></li>
                                    <li><span href="#hot" data-toggle="tab">热点文章</span></li>
                                    <li><span href="#rand" data-toggle="tab">随机文章</span></li>
                                </ul>
                                <ul id="tabul" class="nav nav-tabs nav-justified visible-md">
                                    <li class="active"><span href="#newest" data-toggle="tab">最新</span></li>
                                    <li><span href="#hot" data-toggle="tab">热点</span></li>
                                    <li><span href="#rand" data-toggle="tab">随机</span></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="newest">
                                        <ul class="list-group">
                                            <a class="list-group-item visible-lg" title="贺 建站一千日整"
                                               href="http://coolr.top/1236.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 贺 建站一千日整 </a>
                                            <a class="list-group-item visible-md" title="贺 建站一千日整"
                                               href="http://coolr.top/1236.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 贺 建站一千日整 </a>
                                            <a class="list-group-item visible-lg" title="2019 国庆小活动"
                                               href="http://coolr.top/1226.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 2019 国庆小活动 </a>
                                            <a class="list-group-item visible-md" title="2019 国庆小活动"
                                               href="http://coolr.top/1226.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 2019 国庆小活动 </a>
                                            <a class="list-group-item visible-lg"
                                               title="WordPress 5.2.3 注册跳转 wp-login.php?"
                                               href="http://coolr.top/1221.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> WordPress 5.2.3 注册跳转 wp-login.php? </a>
                                            <a class="list-group-item visible-md"
                                               title="WordPress 5.2.3 注册跳转 wp-login.php?"
                                               href="http://coolr.top/1221.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> WordPress 5.2.3 注册跳转 wp-login.php? </a>
                                            <a class="list-group-item visible-lg" title="浅谈「白嫖」的 Office 订阅账户"
                                               href="http://coolr.top/1192.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 浅谈「白嫖」的 Office 订阅账户 </a>
                                            <a class="list-group-item visible-md" title="浅谈「白嫖」的 Office 订阅账户"
                                               href="http://coolr.top/1192.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 浅谈「白嫖」的 Office 订阅账户 </a>
                                            <a class="list-group-item visible-lg" title="我的QQ被永封了"
                                               href="http://coolr.top/1188.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 我的QQ被永封了 </a>
                                            <a class="list-group-item visible-md" title="我的QQ被永封了"
                                               href="http://coolr.top/1188.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 我的QQ被永封了 </a>
                                            <a class="list-group-item visible-lg" title="使用 WSL 反 odex 化卡米"
                                               href="http://coolr.top/1172.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 使用 WSL 反 odex 化卡米 </a>
                                            <a class="list-group-item visible-md" title="使用 WSL 反 odex 化卡米"
                                               href="http://coolr.top/1172.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 使用 WSL 反 odex 化卡米 </a>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="hot">
                                        <ul class="list-group">
                                            <a class="list-group-item visible-lg" title="我的QQ被永封了"
                                               href="http://coolr.top/1188.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 我的QQ被永封了</a><a
                                                    class="list-group-item visible-md" title="我的QQ被永封了"
                                                    href="http://coolr.top/1188.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 我的QQ被永封了</a><a
                                                    class="list-group-item visible-lg" title="贺 建站一千日整"
                                                    href="http://coolr.top/1236.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 贺 建站一千日整</a><a
                                                    class="list-group-item visible-md" title="贺 建站一千日整"
                                                    href="http://coolr.top/1236.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 贺 建站一千日整</a><a
                                                    class="list-group-item visible-lg" title="2019 国庆小活动"
                                                    href="http://coolr.top/1226.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 2019 国庆小活动</a><a
                                                    class="list-group-item visible-md" title="2019 国庆小活动"
                                                    href="http://coolr.top/1226.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 2019 国庆小活动</a><a
                                                    class="list-group-item visible-lg" title="浅谈「白嫖」的 Office 订阅账户"
                                                    href="http://coolr.top/1192.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 浅谈「白嫖」的 Office 订阅账户</a><a
                                                    class="list-group-item visible-md" title="浅谈「白嫖」的 Office 订阅账户"
                                                    href="http://coolr.top/1192.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 浅谈「白嫖」的 Office 订阅账户</a><a
                                                    class="list-group-item visible-lg"
                                                    title="WordPress 5.2.3 注册跳转 wp-login.php?"
                                                    href="http://coolr.top/1221.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> WordPress 5.2.3 注册跳转
                                                wp-login.php?</a><a class="list-group-item visible-md"
                                                                    title="WordPress 5.2.3 注册跳转 wp-login.php?"
                                                                    href="http://coolr.top/1221.html"
                                                                    rel="bookmark"><i class="fa  fa-book"></i> WordPress
                                                5.2.3 注册跳转 wp-login.php?</a></ul>
                                    </div>
                                    <div class="tab-pane fade" id="rand">
                                        <ul class="list-group">
                                            <a class="list-group-item visible-lg" title="浅谈「白嫖」的 Office 订阅账户"
                                               href="http://coolr.top/1192.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 浅谈「白嫖」的 Office 订阅账户 </a>
                                            <a class="list-group-item visible-md" title="浅谈「白嫖」的 Office 订阅账户"
                                               href="http://coolr.top/1192.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 浅谈「白嫖」的 Office 订阅账户 </a>
                                            <a class="list-group-item visible-lg" title="Live2D 看板娘来了！"
                                               href="http://coolr.top/946.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> Live2D 看板娘来了！ </a>
                                            <a class="list-group-item visible-md" title="Live2D 看板娘来了！"
                                               href="http://coolr.top/946.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> Live2D 看板娘来了！ </a>
                                            <a class="list-group-item visible-lg" title="贺 建站一千日整"
                                               href="http://coolr.top/1236.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 贺 建站一千日整 </a>
                                            <a class="list-group-item visible-md" title="贺 建站一千日整"
                                               href="http://coolr.top/1236.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 贺 建站一千日整 </a>
                                            <a class="list-group-item visible-lg" title="使用 KMS 激活 Microsoft 产品"
                                               href="http://coolr.top/1117.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 使用 KMS 激活 Microsoft 产品 </a>
                                            <a class="list-group-item visible-md" title="使用 KMS 激活 Microsoft 产品"
                                               href="http://coolr.top/1117.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 使用 KMS 激活 Microsoft 产品 </a>
                                            <a class="list-group-item visible-lg" title="Win 下申请 let's encrypt 野卡 (附续期)"
                                               href="http://coolr.top/1090.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> Win 下申请 let's encrypt 野卡 (附续期) </a>
                                            <a class="list-group-item visible-md" title="Win 下申请 let's encrypt 野卡 (附续期)"
                                               href="http://coolr.top/1090.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> Win 下申请 let's encrypt 野卡 (附续期) </a>
                                            <a class="list-group-item visible-lg" title="让用户自助注册 MSO 365 账户的实现"
                                               href="http://coolr.top/1158.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 让用户自助注册 MSO 365 账户的实现 </a>
                                            <a class="list-group-item visible-md" title="让用户自助注册 MSO 365 账户的实现"
                                               href="http://coolr.top/1158.html" rel="bookmark"><i
                                                        class="fa  fa-book"></i> 让用户自助注册 MSO 365 账户的实现 </a>
                                        </ul>
                                    </div>
                                </div>
                            </aside>

                            {{--随机10个--}}
                            {{-- <aside id="linkcat-35" class="widget widget_links clearfix"><h4 class="widget-title">
                                     绒布球们（随机10个）</h4>
                                 <ul class='xoxo blogroll'>
                                     <li><a href="https://www.justhx.com" title="路上雨水会不会融化积雪 蝉鸣是否会打破寂寥"
                                            target="_blank"><img src="/static/web/picture/hxco.png" alt="惶心"
                                                                 title="路上雨水会不会融化积雪 蝉鸣是否会打破寂寥"/> 惶心</a></li>
                                     <li><a href="https://www.qinkei.com" title="乐于分享|发型图片|发型设计" target="_blank"><img
                                                     src="/static/web/picture/qinke.jpg" alt="清秋暖冬"
                                                     title="乐于分享|发型图片|发型设计"/> 清秋暖冬</a></li>
                                     <li><a href="https://xeonphi.cn/" title="小孩子才分对错 成年人只看利弊" target="_blank"><img
                                                     src="/static/web/picture/hcreak.jpg" alt="Hcreak"
                                                     title="小孩子才分对错 成年人只看利弊"/> Hcreak</a></li>
                                     <li><a href="https://moekira.com" title="一个清新的二次元萌博客~" target="_blank"><img
                                                     src="/static/web/picture/kobbv.jpg" alt="Kira"
                                                     title="一个清新的二次元萌博客~"/> Kira</a></li>
                                     <li><a href="https://i.a632079.me/" title="我的御用RBQ~" target="_blank"><img
                                                     src="/static/web/picture/a632079.jpg" alt="a632079"
                                                     title="我的御用RBQ~"/> a632079</a></li>
                                     <li><a href="http://myloveru.cn" title="在梦想的道路上逐步前进" target="_blank"><img
                                                     src="/static/web/picture/myloveru.jpg" alt="北海"
                                                     title="在梦想的道路上逐步前进"/> 北海</a></li>
                                     <li><a href="https://haremu.com/" title="一个中二病宅的日常博客..." target="_blank"><img
                                                     src="/static/web/picture/haremu.jpg" alt="后宫学长"
                                                     title="一个中二病宅的日常博客..."/> 后宫学长</a></li>
                                     <li><a href="https://daidr.me" title="在迷失中寻找自我" target="_blank"><img
                                                     src="/static/web/picture/daidr.png" alt="DaiDR" title="在迷失中寻找自我"/>
                                             DaiDR</a></li>
                                     <li><a href="http://ctrler.cn/" target="_blank"><img
                                                     src="/static/web/picture/ctrler.png" alt="Ctrler"/> Ctrler</a>
                                     </li>
                                     <li><a href="https://dctewi.com" title="一个蒟蒻的博客" target="_blank"><img
                                                     src="/static/web/picture/dctewi.png" alt="冻葱Tewi"
                                                     title="一个蒟蒻的博客"/> 冻葱Tewi</a></li>
 
                                 </ul>
                             </aside>--}}


                        </div>




                    </aside>



                </div>
            </div>
        </div>








        <footer>
            <div id="footer" style="background:rgba(35,40,45,1)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 footer-list text-center">
                            <p class="kratos-social-icons"></p>
                            <p> © 2019 <a href="http://coolr.top">十清凉</a>. All Rights Reserved. | 已在风雨中度过
                                <span id="span_dt_dt">Loading...</span><br>Theme <a href="http://coolr.top/787.html"
                                                                                    rel="nofollow">Kratos</a> Made by <a
                                        href="https://www.vtrois.com" target="_blank" rel="nofollow">Vtrois</a> Modified
                                by <a href="http://coolr.top" rel="nofollow">Moedog</a> | <a
                                        href="http://coolr.top/sitemap.html" target="_blank">Sitemap</a></p>
                        </div>
                    </div>
                </div>
                <div class="cd-tool text-center">
                    <div class="waifu-btn" title="Waifu"><span class="fa fa-venus"></span></div>
                    <div class="gotop-box">
                        <div class="gotop-btn"><span class="fa fa-chevron-up"></span></div>
                    </div>
                    <div class="search-box">
                        <span class="fa fa-search"></span>
                        <form class="search-form" role="search" method="get" id="searchform"
                              action="http://coolr.top/">
                            <input type="text" name="s" id="search" placeholder="Search..." style="display:none"/>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script type='text/javascript' src='/static/web/js/theme.min.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var xb = {
        "thome": "https:\/\/moedog.org\/wp-content\/themes\/Kratos-alpha",
        "ctime": "01\/25\/2017 15:25:00",
        "alipay": "https:\/\/cdn.jsdelivr.net\/gh\/xb2016\/kratos-pjax@0.4.0\/static\/images\/alipayqr.png",
        "wechat": "https:\/\/cdn.jsdelivr.net\/gh\/xb2016\/kratos-pjax@0.4.0\/static\/images\/wechatpayqr.png",
        "copy": "",
        "ajax_url": "https:\/\/moedog.org\/wp-admin\/admin-ajax.php",
        "order": "asc",
        "owo": "https:\/\/cdn.jsdelivr.net\/gh\/xb2016\/kratos-pjax@0.4.1",
        "site_sh": "61"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='/static/web/js/kratos.js'></script>
<script type='text/javascript' src='/static/web/js/pjax.js'></script>
<script type='text/javascript' src='/static/web/js/live2d.js'></script>
<script type='text/javascript' src='/static/web/js/waifu-tips.js'></script>
</body>
</html>