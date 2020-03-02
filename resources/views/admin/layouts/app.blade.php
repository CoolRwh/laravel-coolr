
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
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="http://www.zi-han.net/theme/hplus/search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-left"  >
                    <li class="hidden-xs">
                        <a href="/weixin/" data-index="0" style="color: #676a6c"><i class="fa fa-weixin"></i> 微信管理</a>
                    </li>
                    <li class="hidden-xs">
                        <a href="/weixin/" data-index="0" style="color: #676a6c"><i class="fa fa-facebook"></i> 博客管理</a>
                    </li>
                </ul>
            </nav>
        </div>


        <div class="row content-tabs">
            <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
            </button>
            <nav class="page-tabs J_menuTabs">
                <div class="page-tabs-content">
                    <a href="javascript:;" class="active J_menuTab" data-id="{{route('admin.welcome')}}">首页</a>
                </div>
            </nav>
            <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
            </button>
            <div class="btn-group roll-nav roll-right">
                <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                </button>
                <ul role="menu" class="dropdown-menu dropdown-menu-right">
                    <li class="J_tabShowActive"><a>定位当前选项卡</a>
                    </li>
                    <li class="divider"></li>
                    <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                    </li>
                    <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                    </li>
                </ul>
            </div>
            <a href="{{route('admin.logout')}}" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
        </div>


        <div class="row J_mainContent" id="content-main">
            <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="{{route('admin.welcome')}}" frameborder="0" data-id="{{route('admin.welcome')}}" seamless=""></iframe>
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
