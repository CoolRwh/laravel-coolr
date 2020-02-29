
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>文章列表</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/static/admin/css/bootstrap.min14ed.css" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/style.min862f.css" rel="stylesheet">

</head>


<body class="gray-bg">

<div class="wrapper wrapper-content animated fadeInRight">
    @include('admin.layouts._message')
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox-content forum-container">
                <div >
                    <h3>文章列表</h3>

                <div class="ibox-content">
                    <div class="">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addRole">
                            添加
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addRole">
                            删除
                        </button>
                    </div>
                </div>

                    @component('componets.alert',['id'=>'addRole','title'=>'规则添加','url'=> "admin.user.add",'method'=>'POST'])

                        <div class="modal-body">
                            <div class="form-group"><label>规则名称</label>
                                <input type="text" placeholder="请输入规则名称" class="form-control" name="username" value="{{old('username')}}">
                            </div>
                            <div class="form-group"><label>email </label>
                                <input type="password" placeholder="请输入规则名称" class="form-control" name="email" value="{{old('email')}}">
                            </div>
                            <div class="form-group"><label>规则名称</label>
                                <input type="password" placeholder="请输入规则名称" class="form-control" name="password" value="{{old('password')}}">
                            </div>
                        </div>



                    @endcomponent
                    <table class="table">
                        <thead>
                        <tr>
                            <th>文章ID</th>
                            <th>文章栏目</th>
                            <th>创建时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>
                                    <button type="button" class="btn btn-outline btn-success" data-toggle="modal" data-target="#update">修改</button>
                                    <button type="button" class="btn btn-outline btn-success">权限</button>
                                    <button type="button" class="btn btn-outline btn-danger">删除</button>
                                </td>
                            </tr>

                            @component('componets.alert',['id'=>"update",'title'=>"修改 $user->username",'url'=> "admin.user.update",'method'=>'PUT','data'=>$user->id])

                                <div class="modal-body">
                                    <div class="form-group"><label>规则名称</label>
                                        <input type="text" placeholder="请输入规则名称" class="form-control" name="username" value="{{$user->username}}">
                                    </div>
                                </div>
                            @endcomponent

                            @endforeach
                        </tbody>

                    </table>
                    {{ $users->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
<script src="/static/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/static/admin/js/bootstrap.min.js"></script>
<script src="/static/admin/js/plugins/peity/jquery.peity.min.js"></script>

<script src="/static/admin/js/plugins/iCheck/icheck.min.js"></script>
<script src="/static/admin/js/demo/peity-demo.min.js"></script>
<script  src="{{ asset('static/admin/js/plugins/layer/layer.min.js') }}"></script>
<script src="/static/admin/js/content.min.js?v=1.0.0"></script>
</body>

</html>
