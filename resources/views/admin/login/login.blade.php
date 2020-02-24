
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>十清凉Blog - 登录</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="/static/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min93e3.css" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/style.min.css" rel="stylesheet">
    <link href="/static/admin/css/login.min.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="/static/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>
        if(window.top!==window.self){window.top.location=window.location};
    </script>

</head>

<body class="signin" style="color: #000000">
<div class="signinpanel">
    <div class="row">
        <div class="col-sm-7">
            <div class="signin-info">
                <div class="logopanel m-b">
                    <h1>[ 十清凉！ ]</h1>
                </div>
                <div class="m-b"></div>
                <h4>欢迎来到 <strong>十清凉！</strong></h4>
                <ul class="m-b">
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 开源</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 分享</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 成长</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 小破站</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> QAQ！</li>
                    <li>
                        <!--  <strong><p>——————— 其他方式登录 ———————</p></strong>-->
                        <strong><p>—————————————————————</p></strong>
                    </li>
                    <li  style="font-size: 15px;" >其他登录方式：
                        <a href="{{route('auth.qq')}}" style=" color: white; margin-left: 10px;" >
                            <i class="fa fa-qq "> QQ</i>
                        </a>

                        <a href="/apis/some/index.html" style=" color: white; margin-left: 10px;" >
                            <i class="fa fa-github "> Github</i>
                        </a>
                        <a href="/login/gitee.html"  style=" color: white; margin-left: 10px;" >
                            <img width="25px" src="/static/admin/img/gitee.png">码云
                        </a>
                        <a href="/login/weibo.html" style=" color: white; margin-left: 10px;" >
                            <i class="fa fa-weibo "> 微博</i>
                        </a>
                    </li>
                    <p></p>
                    <li><strong>没有账号？ <a href="/admin/login/register.html" style="color: white">立即注册&raquo;</a></strong></li>
                </ul>

            </div>
        </div>
        <div class="col-sm-5">
            <form method="post" id="login" action="{{url('admin/login')}}">
                <h4 class="no-margins">登录：</h4>
                <p class="m-t-md">登录到Blog后台</p>
                @csrf
                <input type="text" class="form-control uname" name="username" placeholder="用户名" />
                <input type="password" class="form-control pword m-b" name="password" placeholder="密码" />
                <a href="#" style="color: white">忘记密码了？</a>
                <a href="#" style="color: white;float: right">立即注册&raquo;</a>
                <button type="submit" class="btn btn-success btn-block">登录</button>
            </form>
        </div>
    </div>

    <div class="signup-footer">
        <div class="pull-left">
            &copy; 2019-2020
        </div>
    </div>
</div>
<script src="/static/admin/js/jquery.min.js"></script>
<script  src="/static/admin/js/plugins/layer/layer.min.js"></script>
<!--<script src="/static/admin/js/content.min.js"></script>-->
<script src="/static/admin/js/plugins/sweetalert/sweetalert.min.js"></script>
<script>
</script>


</body>
</html>
