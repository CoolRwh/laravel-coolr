@extends('web.public.layouts')


@section('title')十清凉!-{{$articles->title}}@endsection

@section('article_title'){{$articles->title}}@endsection

@section('desc')
{{--    {{$articles->title}}--}}
    @endsection

@section('content')
    <article>
        <div class="kratos-hentry kratos-post-inner clearfix">
            <header class="kratos-entry-header">
                <h1 class="kratos-entry-title text-center">{{$articles->title}}</h1>
                <div class="kratos-post-meta text-center">
                    <span>
                    <i class="fa fa-calendar"></i> 2020-2-22 <i class="fa fa-commenting-o"></i> 78条评论  <i class="fa fa-eye"></i> 8.37k次阅读
                    <span class="hd">
                    <i class="fa fa-thumbs-o-up"></i> 39人点赞 <i class="fa fa-user"></i> 十清凉  </span>
                    </span>
                </div>
            </header>


          {{--  <div class="kratos-post-content">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">前言</h3>
                    </div>
                    <div class="panel-body">哇，不知不觉已经苟活了 1000 天了，可喜可贺。其实是想到 1024 日再发的，但是已经咕太久了。久违的发文，来说说最近干了点什么。</div>
                </div>--}}

{{--                内容--}}
                <div>
                    <?php echo htmlspecialchars_decode($articles->content)?>
                    <div>


{{--                内容结束--}}




                @if(!isset($articles))
                    <h2>没有</h2>
                    @endif


            <footer class="kratos-entry-footer clearfix">
                <div class="post-like-donate text-center clearfix" id="post-like-donate">
                    <a href="javascript:;" class="Donate"><i class="fa fa-bitcoin"></i> 打赏</a>
                    <a href="javascript:;" id="btn" data-action="love" data-id="1236" class="Love"><i
                                class="fa fa-thumbs-o-up"></i> 点赞</a>
                    <a href="javascript:;" class="Share"><i class="fa fa-share-alt"></i> 分享</a>
                </div>
                <div class="footer-tag clearfix">
                    <div class="pull-left">
                        <i class="fa fa-tags"></i>
                        <a href="https://moedog.org/tag/%e5%8d%83%e6%97%a5%e7%ba%aa%e5%bf%b5" rel="tag">千日纪念</a></div>
                    <div class="pull-date">
                        <span>最后编辑：2019-10-22</span>
                    </div>
                </div>
            </footer>
        </div>


        <nav class="navigation post-navigation clearfix" role="navigation">
            <div class="nav-previous clearfix">
                @if(isset($prev_article))
                <a title="{{$prev_article->title}}" href="{{route('web.article.info',[$prev_article->id])}}">&lt; 上一篇</a>
                    @endif
            </div>
            <div class="nav-next">
                @if(isset($next_article))
                <a title="{{$next_article->title}}" href="{{route('web.article.info',[$next_article->id])}}">下一篇 &gt;</a>
                    @endif
            </div>
        </nav>


        <div id="comments" class="comments-area">
          {{--  <ol class="comment-list">
                <li class="comment even thread-even depth-1 parent" id="comment-4615">
                    <div id="div-comment-4615" class="comment-body">
                        <div class="comment-author vcard">
                            <img alt=""
                                 src="https://gravatar.loli.net/avatar/fa6dbede4c6dda941d6b280ad0d37e17?s=50&amp;d=mm&amp;r=g"
                                 srcset="https://gravatar.loli.net/avatar/fa6dbede4c6dda941d6b280ad0d37e17?s=100&amp;d=mm&amp;r=g 2x"
                                 class="avatar avatar-50 photo" height="50" width="50"> <cite class="fn"><a
                                        href="http://e9hub.com" target="_blank" rel="nofollow">弈九</a></cite><span
                                    class="says">说道：</span></div>

                        <div class="comment-meta commentmetadata"><a
                                    href="https://moedog.org/1236.html/comment-page-4#comment-4615">
                                2020-01-30 21:14 </a>
                        </div>

                        <div class="useragent"><img
                                    src="https://cdn.jsdelivr.net/gh/xb2016/kratos-pjax@0.4.3/static/images/ua/chrome.png"
                                    style="margin-top:-3px;width:16px;height:16px"> Google Chrome <img
                                    src="https://cdn.jsdelivr.net/gh/xb2016/kratos-pjax@0.4.3/static/images/ua/win-4.png"
                                    style="margin-left:5px;margin-top:-3px;width:16px;height:16px"> Windows 7
                        </div>
                        <p>这个评论系统有点卡顿啊 反应很慢很慢</p>

                        <div class="reply"><a rel="nofollow" class="comment-reply-link"
                                              href="https://moedog.org/1236.html?replytocom=4615#respond"
                                              data-commentid="4615" data-postid="1236"
                                              data-belowelement="div-comment-4615" data-respondelement="respond"
                                              aria-label="回复给弈九">回复</a></div>
                    </div>
                    <ol class="children">
                        <li class="comment byuser comment-author-xb2016 bypostauthor odd alt depth-2" id="comment-4621">
                            <div id="div-comment-4621" class="comment-body">
                                <div class="comment-author vcard">
                                    <img alt=""
                                         src="https://gravatar.loli.net/avatar/5e6892e999ca8c85a358d21164167f38?s=50&amp;d=mm&amp;r=g"
                                         srcset="https://gravatar.loli.net/avatar/5e6892e999ca8c85a358d21164167f38?s=100&amp;d=mm&amp;r=g 2x"
                                         class="avatar avatar-50 photo" height="50" width="50"> <cite class="fn"><a
                                                href="https://www.fczbl.vip" target="_blank"
                                                rel="nofollow">小白-白</a></cite><span class="says">说道：</span></div>

                                <div class="comment-meta commentmetadata"><a
                                            href="https://moedog.org/1236.html/comment-page-4#comment-4621">
                                        2020-01-30 21:45 </a>
                                </div>

                                <div class="useragent"><img
                                            src="https://cdn.jsdelivr.net/gh/xb2016/kratos-pjax@0.4.3/static/images/ua/firefox.png"
                                            style="margin-top:-3px;width:16px;height:16px"> Firefox <img
                                            src="https://cdn.jsdelivr.net/gh/xb2016/kratos-pjax@0.4.3/static/images/ua/win-6.png"
                                            style="margin-left:5px;margin-top:-3px;width:16px;height:16px"> Windows 10
                                </div>
                                <p>网络问题 有些区域我的站都打不开了</p>

                                <div class="reply"><a rel="nofollow" class="comment-reply-link"
                                                      href="https://moedog.org/1236.html?replytocom=4621#respond"
                                                      data-commentid="4621" data-postid="1236"
                                                      data-belowelement="div-comment-4621" data-respondelement="respond"
                                                      aria-label="回复给小白-白">回复</a></div>
                            </div>
                        </li><!-- #comment-## -->
                    </ol><!-- .children -->
                </li><!-- #comment-## -->
            </ol>


            <div id="comments-nav">
                <a class="prev page-numbers" href="https://moedog.org/1236.html/comment-page-3#comments">上一页</a>
                <a class="page-numbers" href="https://moedog.org/1236.html/comment-page-1#comments">1</a>
                <a class="page-numbers" href="https://moedog.org/1236.html/comment-page-2#comments">2</a>
                <a class="page-numbers" href="https://moedog.org/1236.html/comment-page-3#comments">3</a>
                <span aria-current="page" class="page-numbers current">4</span></div>--}}

            <div id="respond" class="comment-respond">
                <h4 id="reply-title" class="comment-reply-title">发表评论
                    <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">取消回复</a>
                    </small>
                </h4>
                <form action="#" method="post" id="commentform"
                      class="comment-form"><p class="comment-notes">电子邮件地址不会被公开。必填项已用 * 标注</p>
                    <div class="comment form-group has-feedback">
                        <div class="input-group">
                            <textarea class="form-control" id="comment" placeholder="|´・ω・)ノ还不快点说点什么呀poi~" name="comment" rows="5" aria-required="true" required="" onkeydown="if(event.ctrlKey){if(event.keyCode==13){document.getElementById('submit').click();return false}};"></textarea>
                        </div>
                        <div class="OwO">

                        </div>
                    </div>
                    <div class="comment-form-author form-group has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input class="form-control" placeholder="昵称" id="author" name="author" type="text" value="1"
                                   size="30"><span class="form-control-feedback required">*</span></div>
                    </div>
                    <div class="comment-form-email form-group has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
                            <input class="form-control" placeholder="邮箱" id="email" name="email" type="text"
                                   value="101@qq.com" size="30"><span class="form-control-feedback required">*</span>
                        </div>
                    </div>
                    <div class="comment-form-url form-group has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-key"></i></div>
                            <input class="form-control" placeholder="人机验证：1 ＋ 5 = ?" id="code" name="code" type="text"
                                   value="" autocomplete="off" size="30"><span
                                    class="form-control-feedback required">*</span><input type="hidden" name="co_num1"
                                                                                          value="2"><input type="hidden"
                                                                                                           name="co_num2"
                                                                                                           value="7">
                        </div>
                    </div>
                    <div class="comment-form-url form-group has-feedback">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-link"></i></div>
                            <input class="form-control" placeholder="网站" id="url" name="url" type="text"
                                   value="http://www.tt.com" size="30"></div>
                    </div>

                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="btn btn-primary"
                                                  value="发表评论"> <input type="hidden" name="comment_post_ID" value="1236"
                                                                       id="comment_post_ID">
                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                    </p></form>
            </div><!-- #respond -->
        </div>





    </article>
@endsection