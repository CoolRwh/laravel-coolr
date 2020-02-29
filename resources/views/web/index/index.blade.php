@extends('web.public.layouts')

@section('title')
    十清凉!-首页
@endsection

@section('article_title')
    十清凉
@endsection

@section('desc')
    A little white programmer in Chengdu
@endsection



@section('content')

    <article class="kratos-hentry clearfix">
        <div class="kratos-entry-border-new clearfix">
            <div class="kratos-entry-thumb-new">
                <a href="{{route('web.article.info',[1])}}"><img src="https://i.loli.net/2020/01/12/tvxji7RCLPhyaBG.jpg" alt="贺 建站一千日整"></a></div>
            <div class="kratos-post-inner-new">
                <header class="kratos-entry-header-new">
                    <a class="label" href="{{route('web.article.info',[1])}}">Mysql</a>
                    <h2 class="kratos-entry-title-new"><a href="{{route('web.article.info',[1])}}">贺
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
            <a href="{{route('web.article.info',[1])}}"><i class="fa fa-commenting-o"></i> 35条评论</a>
        </span>
                <span class="visible-lg visible-md visible-sm pull-left">
            <a href="{{route('web.article.info',[1])}}"><i class="fa fa-eye"></i> 2.73k次阅读</a>
            <a href="javascript:;" data-action="love" data-id="1236" class="Love"><i class="fa fa-thumbs-o-up"></i> 21人点赞</a>
            <a href="#"><i class="fa fa-user"></i> 小白-白</a>
        </span>
                <span class="pull-right">
            <a class="read-more" href="{{route('web.article.info',[1])}}" title="阅读全文">阅读全文 <i
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


    @endsection