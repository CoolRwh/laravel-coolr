
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="/static/admin/css/bootstrap.min14ed.css" rel="stylesheet">
    <link href="/static/admin/css/style.min862f.css" rel="stylesheet">
</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox-content forum-container">
                <div >

                    @if(isset($roles->id))
                        <i  class="fa fa-user"></i>
                        <h3> 修改角色--{{$roles->role_name}}</h3>
                    @else
                        <h3> 添加角色</h3>
                    @endif



                    <div class="ibox-content">
                        @if(isset($roles->id))
                            <form class="form-horizontal m-t" action="{{route('admin.role.update',[$roles->id])}}" method="POST">
                                @method('PUT')
                                @else
                                    <form class="form-horizontal m-t" action="{{route('admin.role.store')}}" method="POST">

                                        @endif

                                        @csrf
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">角色名称：</label>
                                            <div class="col-sm-8">
                                                <input id="role_name" name="role_name" class="form-control" type="text" aria-required="true" aria-invalid="false" value="@isset($roles->role_name){{$roles->role_name}}@endisset">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">排序：</label>
                                            <div class="col-sm-8">
                                                <input id="sort" name="sort" class="form-control" type="text" aria-required="true" aria-invalid="true" value="@isset($roles->sort){{$roles->sort}}@endisset">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">描述：</label>
                                            <div class="col-sm-8">
                        <textarea id="desc" name="desc" class="form-control" required="" aria-required="true">@isset($roles->desc){{$roles->desc}}@endisset
                        </textarea>
                                            </div>

                                            <div class="col-sm-4 col-sm-offset-3" style="padding-top: 10px">
                                                <button class="btn btn-primary" type="submit">提交</button>
                                                <a class="btn btn-outline btn-success " href="{{route('admin.role.index')}}">返回</a>
                                            </div>
                                        </div>

                                    </form>

                    </div>

                </div>


            </div>
        </div>
    </div>
</div>

</body>
</html>