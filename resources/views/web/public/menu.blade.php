<div id="sidebar" class="affix-top">

    {{--  头像开始--}}
    <aside id="kratos_about-2" class="widget widget_kratos_about clearfix">
        <div class="photo-background">
            <div class="photo-background"
                 style="background:url(/static/web/images/about.jpg) no-repeat center center;-webkit-background-size:cover;background-size:cover"></div>
        </div>
        <div class="photo-wrapper clearfix">
            <div class="photo-wrapper-tip text-center">
                @if(session('webUserInfo.avatar') != null)
                <a href="#" rel="nofollow"><img class="about-photo" src="{{@session('webUserInfo.avatar')}}" alt="dddddsfsdf史蒂夫"/></a>
                    @else
                    <a href="#" rel="nofollow"><img class="about-photo" src="/static/web/images/480x480.jpg" alt=""/></a>
                @endif
            </div>
        </div>
        <div class="textwidget">
            <p class="text-center"><span style="font-size: 10pt;"> 咦？我是谁？我为什么会在这？<a href="http://coolr.top">[关于]</a></span></p>
        </div>
    </aside>

    {{--  头像结束--}}

    {{--  头像开始--}}

{{--
    <aside id="kratos_comments-2" class="widget widget_kratos_comments clearfix"><h4 class="widget-title">最近评论</h4>
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
--}}


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
     <aside id="linkcat-35" class="widget widget_links clearfix">
         <h4 class="widget-title">标 签</h4>
         <ul class='xoxo blogroll'>

             <li>
                     <i class="fa fa-tags"></i>
                     <a href="#" rel="tag">php</a>
             </li>
             <li>
                     <i class="fa fa-tags"></i>
                     <a href="#" rel="tag">mysql</a>
             </li>
             <li>
                 <i class="fa fa-tags"></i>
                 <a href="#" rel="tag">Laravel</a>
             </li>
         </ul>
     </aside>


</div>