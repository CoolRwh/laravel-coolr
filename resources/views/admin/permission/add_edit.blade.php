
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="/static/admin/css/bootstrap.min14ed.css" rel="stylesheet">
    <link href="/static/admin/css/style.min862f.css" rel="stylesheet">
    <link href="{{asset('static/admin/layui/css/layui.css')}}" rel="stylesheet">
</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox-content forum-container">
                <div >

                    @if(isset($roles->id))
                        <i  class="fa fa-user"></i>
                        <h3> 修改权限--{{$roles->role_name}}</h3>
                    @else
                        <h3> 添加权限</h3>
                    @endif



                    <div class="ibox-content">
                        @if(isset($roles->id))
                            <form class="form-horizontal m-t" action="{{route('admin.permission.update',[$roles->id])}}" method="POST">
                                @method('PUT')
                                @else
                                    <form class="form-horizontal m-t" action="{{route('admin.permission.store')}}" method="POST">

                                        @endif

                                        @csrf
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">上级权限：</label>
                                            <div class="col-sm-8">

                                                <select id="pid" class="form-control m-b" name="pid" >
                                                    <option value="0" >顶级权限</option>
                                                    @foreach($pid as $v)
                                                    <option value="{{$v->id}}">{{$v->per_name}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">权限名称：</label>
                                            <div class="col-sm-8">
                                                <input id="per_name" name="per_name" placeholder="权限名称" class="form-control" type="text" aria-required="true" aria-invalid="false" value="@isset($roles->role_name){{$roles->role_name}}@endisset">
                                            </div>
                                        </div>
                                        <div class="form-group" id="per_url" >
                                            <label class="col-sm-3 control-label">权限路径：</label>
                                            <div class="col-sm-8">
                                                <input  name="per_url" class="form-control" type="text" aria-required="true" aria-invalid="true" value="@isset($roles->sort){{$roles->sort}}@endisset">
                                                <span class="help-block m-b-none">例：<b style="color:#ed5565">"App\Http\Controllers\Admin\PermissionController@index"</b></span>
                                            </div>
                                        </div>
                                        <div class="form-group" id="url">
                                            <label class="col-sm-3 control-label">url：</label>
                                            <div class="col-sm-8">
                                                <input  name="url" class="form-control" type="text" aria-required="true" aria-invalid="true" value="@isset($roles->sort){{$roles->sort}}@endisset">
                                                <span class="help-block m-b-none">例：<b style="color:#ed5565;">"/admin/permission"</b></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">所属模块：</label>
                                            <div class="col-sm-8">
                                                <input id="model" name="model" class="form-control" type="text" aria-required="true" aria-invalid="true" value="@isset($roles->sort){{$roles->sort}}@endisset">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">菜单显示：</label>
                                            <div class="col-sm-8">

                                                    <input type="radio" name="show" value="1" title="生成" checked=""><div class="layui-unselect layui-form-radio layui-form-radioed">
                                                        <i class="layui-anim layui-icon layui-anim-scaleSpring"></i><span>显示</span></div>
                                                    <input type="radio" name="show" value="0" title="不生成"><div class="layui-unselect layui-form-radio">
                                                        <i class="layui-anim layui-icon"></i><span>不显示</span></div>


                                            </div>
                                        </div>

                                            <div class="col-sm-4 col-sm-offset-3" style="padding-top: 10px">
                                                <button class="btn btn-primary" type="submit">提交</button>
                                                <a class="btn btn-outline btn-success " href="{{route('admin.permission.index')}}">返回</a>
                                            </div>
                                        </div>
                                    </form>

                    </div>

                </div>


            </div>
        </div>
    </div>
<script src="/static/admin/js/jquery.min.js"></script>
<script src="{{asset('static/admin/layui/layui.js')}}" type="text/javascript"></script>
<script src="{{asset('static/admin/layui/layui.all.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    //菜单显示
   $('#per_url,#url').hide();
    $('#pid').change(function () {
        var _val = $(this).val();
        if (_val > 0){
            $('#per_url,#url').show(500);
        }else {
            $('#per_url,#url').val('');
            $('#per_url,#url').hide(500);
        }
    })

</script>
</body>
</html>