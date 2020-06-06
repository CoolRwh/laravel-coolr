<!DOCTYPE HTML>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="format-detection" content="telphone=no,email=no">
    <meta name="keywords" content="@yield('title')">
    <meta name="description" itemprop="description" content="@yield('title')">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:site_name" content="@yield('title')">
    <meta property="og:type" content="website">
    <meta property="og:description" content="@yield('title')">
    <meta property="og:url" content="http://coolr.top">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('title')">
    <meta name="twitter:card" content="@yield('title')">
    <link rel="icon" type="image/x-icon" href="./coolr.ico">
    <title>@yield('title')</title>

    <link rel='stylesheet' id='fontawe-css' href='{{@asset('static/web/css/font-awesome.min.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='fontawe-css' href='{{@asset('static/web/css/kratos.min.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='fontawe-css' href='{{@asset('static/web/css/my.css')}}' type='text/css' media='all' />

{{--    <link rel="stylesheet" href="{{@asset('static/admin/plugins/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css')}}">
    <script type='text/javascript' src='{{@asset('static/admin/plugins/ueditor/third-party/SyntaxHighlighter/shCore.js')}}'></script>--}}

    <script type='text/javascript' src='{{@asset('static/web/js/jquery.min.js')}}'></script>

    <style>
        #offcanvas-menu{background:rgba(42,42,42,.9)}
        .affix{top:61px}
        .kratos-cover.kratos-cover_2{background-image:url({{@asset('static/web/images/site_head.png')}})}
        /*.kratos-cover.kratos-cover_2{background-image:url('E:/图片/缩略图/1.webp')}*/
        @media(max-width:768px){
            .kratos-cover.kratos-cover_2{
                background-image:url({{@asset('static/web/images/site_head.png')}})}}
    </style>
</head>

<body>
<div id="kratos-wrapper">
    <div id="kratos-page">

        <!-- header -->
        @include('web.public.header')

        <!-- header -->
        <div id="kratos-blog-post" style="background:#f5f5f5">
            <div id="container" class="container">
                <div class="row">


                    <section id="main" class="col-md-8">
                        {{--类容--}}
                        @yield('content')
                    </section>


                    <aside id="kratos-widget-area" class="col-md-4 hidden-xs hidden-sm scrollspy">

                        <div id="sidebar" class="affix-top">

                            {{--右侧菜单--}}
                            @include('web.public.menu')



                        </div>
                    </aside>
                </div>
            </div>
        </div>

        <!-- footer -->
     @include('web.public.footer')
        <!-- footer -->

    </div>
</div>
<script type='text/javascript' src='{{@asset('static/web/js/theme.min.js')}}'></script>
<script type='text/javascript'>/* <![CDATA[ */
    var xb = {

        "ctime": "10/10/2019 10:10:00",
        "site_sh": "10"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='{{@asset('static/web/js/kratos.js')}}'></script>
{{-- <script type='text/javascript' src='{{@asset('static/web/js/pjax.js')}}'></script>--}}
<!-- <script type='text/javascript' src='static/js/live2d.js'></script> -->
<!-- <script type='text/javascript' src='static/js/waifu-tips.js'></script> -->
</body>

</html>