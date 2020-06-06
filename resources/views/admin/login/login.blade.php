<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{@asset('static/admin/css/font-awesome.min93e3.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{@asset('static/admin/css/theme-dark.min.css')}}" id="stylesheetDark">
    <link rel="icon" type="image/x-icon" href="./coolr.ico">
    <title>十清凉-登陆</title>
</head>

<style>
    .avatar-title{
        border-style:solid;
        border-width: 2px
    }
    .avatar-title:hover{
        border-color:#2c7be4;
    }

</style>



<body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">




<!-- CONTENT
================================================== -->
<div class="container">


    <div class="row align-items-center">
        <div class="col-12 col-md-6 offset-xl-2 offset-md-1 order-md-2 mb-5 mb-md-0">

            <!-- Image -->
            <div class="text-center">
                <img src="{{@asset('static/admin/img/happiness.svg')}}" alt="..." class="img-fluid">
            </div>

        </div>
        <div class="col-12 col-md-5 col-xl-4 order-md-1 my-5">

            <!-- Heading -->
            <h1 class="display-4 text-center mb-3">
                Sign in to Coolr
            </h1>

            <!-- Subheading -->
            <p class="text-muted text-center mb-5">
                Free access to my dashboard.<br >
                Don't have an account yet? <a href="#">Sign up</a>.
            </p>

            <!-- Form -->
            <form action="{{@route('admin.login')}}" method="post">

                @csrf
                <!-- Email address -->
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="ibox-content" id="error">
                                <div class="alert alert-danger alert-dismissable" >
                                    {{ $error }}
                                </div>
                            </div>
                        @endforeach
                    @endif

                    @foreach (['danger', 'warning', 'success','info'] as $msg)
                        @if(session()->has($msg))
                            <div class="ibox-content" id="error">
                                <div class="alert alert-{{$msg}} alert-dismissable" >
                                    {{ session()->get($msg)}}
                                </div>
                            </div>

                        @endif


                    @endforeach


                <div class="form-group">
                    <!-- Label -->
                    <label>Username or email address</label>

                    <!-- Input -->
                    <input type="text" name="username" class="form-control" placeholder="Username or email" value="{{old('username')}}">

                </div>

                <!-- Password -->
                <div class="form-group">

                    <div class="row">
                        <div class="col">

                            <!-- Label -->
                            <label>Password</label>

                        </div>
                        <div class="col-auto">

                            <!-- Help text -->
                            <a href="#" class="form-text small text-muted">
                                Forgot password?
                            </a>

                        </div>
                    </div> <!-- / .row -->

                    <!-- Input group -->
                    <div class="input-group input-group-merge">

                        <!-- Input -->
                        <input id="password" type="password" name="password" class="form-control form-control-appended" placeholder="Enter your password" value="123456">

                        <!-- Icon -->
                        <div class="input-group-append">
                  <span class="input-group-text eye">
                    <i id="see" class="fa fa-eye-slash"></i>

                  </span>
                        </div>

                    </div>
                </div>

                <!-- Submit -->
                <button class="btn btn-lg btn-block btn-primary mb-3">
                    Sign in
                </button>


                <!-- Link -->
         {{--       <div class="text-center">
                    <small class="text-muted text-center">
                        Don't have an account yet? <a href="#">Sign up</a>.
                    </small>
                </div>--}}

                    {{--第三方登陆--}}
                    <div class="form-group" >
                        <div class="row">
                            <div class="col" style="font-size: 15px;">
                                <label>其他方式登陆 QAQ！</label>
                            </div>
                        </div>

                        <div class="avatar avatar-sm" >
{{--                            <a href="{{@route('auth.qq')}}" >--}}
                            <a href="http://coolr.top/auth/qq" >
                                <span class="avatar-title rounded-circle" style=""><i class="fa fa-qq"></i></span>
                            </a>
                        </div>
                        <div class="avatar avatar-sm" >
                            <a href="{{@route('auth.weiBo')}}" >
                                <span class="avatar-title rounded-circle" style=""><i class="fa fa-weibo"></i></span>
                            </a>
                        </div>
                        <div class="avatar avatar-sm" >
                            <a href="{{@route('auth.github')}}" >
                                <span class="avatar-title rounded-circle" style=""><i class="fa fa-github"></i></span>
                            </a>
                        </div>
                    </div>

            </form>

        </div>
    </div> <!-- / .row -->
</div> <!-- / .container -->

<!-- JAVASCRIPT
================================================== -->
<!-- Libs JS -->
<script src="{{@asset('static/admin/js/jquery.min.js')}}"></script>
<script>


    $('#error').show();
    setTimeout(function () {
        $('#error').hide();
    },3000)


    $('.eye').click(function () {
        let password = document.getElementById("password");
        let see = document.getElementById("see");
        console.log("修改状态！");
        if (password.type == "password") {
            password.type = "text";
            see.className = "fa fa-eye"
        }else{
            password.type = "password";
            see.className = "fa fa-eye-slash"
        }
    })
</script>
</body>
</html>
