@extends('web.public.layouts')


@section('title')
    十清凉! - {{$cate_name}}
    @endsection

@section('article_title')
    {{$cate_name}}
@endsection

@section('content')
        <div class="kratos-hentry clearfix">
            <h1 class="kratos-post-header-title">分类：{{$cate_name}}</h1>
            {{--<h1 class="kratos-post-header-title"><p>原创内容，转载还请注明</p>
            </h1>--}}
        </div>

        <article class="kratos-hentry clearfix">
            <div class="kratos-entry-border-new clearfix">
                <div class="kratos-entry-thumb-new">
                    <a href="{{route('web.article.info',[1])}}"><img src="https://img.moedog.org/images/2019/08/21/Office365.png" alt="浅谈「白嫖」的 Office 订阅账户"></a>    </div>
                <div class="kratos-post-inner-new">
                    <header class="kratos-entry-header-new">
                        <a class="label" href="https://moedog.org/category/lab">{{$cate_name}}</a>
                        <h2 class="kratos-entry-title-new"><a href="{{route('web.article.info',[1])}}">浅谈「白嫖」的 Office 订阅账户</a></h2>
                    </header>
                    <div class="kratos-entry-content-new">
                        <p>在阅读本文之前，需要搞清楚下面几个概念： 1. 许可的计划类型(Eligibility)，仅对国际版而言：即你有没有资格直接购买某种类型的订阅，一般分为四类：商业，教育，非盈利，政府 。有没有资格可以在 管理中心-购买服…</p>
                    </div>
                </div>
                <div class="kratos-post-meta-new">
        <span class="pull-left">
            <a><i class="fa fa-calendar"></i> 2019-08-20</a>
            <a href="https://moedog.org/1192.html#comments"><i class="fa fa-commenting-o"></i> 37条评论</a>
        </span>
                    <span class="visible-lg visible-md visible-sm pull-left">
            <a href="https://moedog.org/1192.html"><i class="fa fa-eye"></i> 11.04k次阅读</a>
            <a href="javascript:;" data-action="love" data-id="1192" class="Love"><i class="fa fa-thumbs-o-up"></i> 27人点赞</a>
            <a href="/?author=1"><i class="fa fa-user"></i> 小白-白</a>
        </span>
                    <span class="pull-right">
            <a class="read-more" href="https://moedog.org/1192.html" title="阅读全文">阅读全文 <i class="fa fa-chevron-circle-right"></i></a>
        </span>
                </div>
            </div>
        </article>

    @endsection