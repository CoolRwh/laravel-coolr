
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

    {{--  文章开始--}}
    <aside class="widget widget_kratos_poststab">
        <ul id="tabul" class="nav nav-tabs nav-justified visible-lg">
            <li class="active">
                <span href="#newest" data-toggle="tab">最新文章</span></li>
            <li>
                <span href="#hot" data-toggle="tab">热点文章</span></li>
            <li>
                <span href="#rand" data-toggle="tab">随机文章</span></li>
        </ul>
       {{-- <ul id="tabul" class="nav nav-tabs nav-justified visible-md">
            <li class="active">
                <span href="#newest" data-toggle="tab">最新</span></li>
            <li>
                <span href="#hot" data-toggle="tab">热点</span></li>
            <li>
                <span href="#rand" data-toggle="tab">随机</span></li>
        </ul>--}}
        <div class="tab-content">
            <div class="tab-pane fade in active" id="newest">
                <ul class="list-group">

                    @foreach($m_article as $v)
                    <a href="{{route('web.article.info',[$v->id])}}" class="list-group-item visible-lg"><i class="fa  fa-book"></i>{{$v->title}}</a>
                    <a href="{{route('web.article.info',[$v->id])}}" class="list-group-item visible-md"><i class="fa  fa-book"></i>{{$v->title}}</a>
                        @endforeach
                </ul>
            </div>
            <div class="tab-pane fade" id="hot">
                <ul class="list-group">
                    <a href="{{route('web.article.info',[1])}}" class="list-group-item visible-lg"><i class="fa  fa-book"></i>热点文章-测试文章1</a>
                    <a href="{{route('web.article.info',[1])}}" class="list-group-item visible-md"><i class="fa  fa-book"></i>热点文章-测试文章1</a>
                </ul>
            </div>
            <div class="tab-pane fade" id="rand">
                <ul class="list-group">
                    <a href="{{route('web.article.info',[1])}}" class="list-group-item visible-lg"><i class="fa  fa-book"></i>随机文章-测试文章1</a>
                    <a href="{{route('web.article.info',[1])}}" class="list-group-item visible-md"><i class="fa  fa-book"></i>随机文章-测试文章1</a>
                </ul>
            </div>
        </div>
    </aside>


    {{--  文章结束--}}





    {{--标签--}}
     <aside id="linkcat-35" class="widget widget_links clearfix">
         <h4 class="widget-title"><i class="fa fa-tags"></i> 标 签</h4>
         <div class="tag_clouds">

             @foreach($tag as $k)
                 <a href="{{@route('web.tags.list',[$k->tag_name])}}">{{$k->tag_name}}</a>
                 @endforeach

            {{-- <a href="{{@route('web.tags.list',['php'])}}">php</a>
             <a href="{{@route('web.tags.list',['mysql'])}}">mysql</a>
             <a href="{{@route('web.tags.list',['laravel'])}}">laravel</a>--}}
         </div>
     </aside>
