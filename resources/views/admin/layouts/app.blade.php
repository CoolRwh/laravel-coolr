
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>@yield('title','后台首页 - 十清凉！')</title>

    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico">


    <link href="{{@asset('static/admin/css/bootstrap.min14ed.css')}}" rel="stylesheet">
    <link href="{{@asset('static/admin/css/font-awesome.min93e3.css')}}" rel="stylesheet">
    <link href="{{@asset('static/admin/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{@asset('static/admin/css/style.min862f.css')}}" rel="stylesheet">


</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">



<div id="wrapper">
    <!--左侧导航开始-->
@include('admin.layouts._menu')
    <!--左侧导航结束-->
    <!--右侧部分开始-->
{{--    <div id="page-wrapper" style="background-color: white">
        <div class="row border-bottom">

        </div>



    </div>--}}

    <div id="page-wrapper" class="gray-bg" >
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="http://www.zi-han.net/theme/hplus/search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="hidden-xs">
                        <a href="/weixin/" data-index="0"><i class="fa fa-weixin"></i> 微信管理</a>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a class="right-sidebar-toggle" aria-expanded="false">
                            <i class="fa fa fa-sign-out"></i>退出
                        </a>
                    </li>
                </ul>
            </nav>
        </div>


        <div class="row wrapper border-bottom white-bg page-heading">

            @yield('contend')
        </div>

        @include('admin.layouts._footer')
</div>




</div>


<script src="{{@asset('static/admin/js/jquery.min.js')}}"></script>
<script src="{{@asset('static/admin/js/bootstrap.min.js')}}"></script>
<script src="{{@asset('static/admin/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{@asset('static/admin/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{@asset('static/admin/js/plugins/layer/layer.min.js')}}"></script>
<script src="{{@asset('static/admin/js/hplus.min.js')}}"></script>
<script type="text/javascript" src="{{@asset('static/admin/js/contabs.min.js')}}"></script>
<script src="{{@asset('static/admin/js/plugins/pace/pace.min.js')}}"></script>
</body>
</html>
