
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="/static/admin/css/bootstrap.min14ed.css" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min93e3.css" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/style.min862f.css" rel="stylesheet">
    <link href="{{@asset('static/web/css/mdui.min.css')}}" rel="stylesheet">
</head>


<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        @include('admin.layouts._message')
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox-content forum-container">
                    <div >

                        @if(isset($tags->id))
                            <h3>修改标签：【{{$tags->tag_name}}】</h3>
                            @else
                            <h3> 添加标签</h3>
                            @endif



                        <div class="ibox-content">
                            @if(isset($tags->id))
                                <form class="form-horizontal m-t" action="{{route('admin.tag.update',[$tags->id])}}" method="POST">
                                    @method('PUT')
                                @else
                                        <form class="form-horizontal m-t" action="{{route('admin.tag.store')}}" method="POST">

                                @endif


                                            @csrf
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">标签名称：</label>
                                            <div class="col-sm-8">
                                                <input id="cate_name" name="tag_name" class="form-control" type="text" aria-required="true" aria-invalid="false" value="@isset($tags->tag_name){{$tags->tag_name}}@endisset">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">排序：</label>
                                            <div class="col-sm-8">
                                                <input id="sort" name="sort" class="form-control" type="text" aria-required="true" aria-invalid="true" value="@isset($tags->sort){{$tags->sort}}@endisset">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">是否开启</label>
                                            <div class="col-sm-8">
                                                <label class="mdui-switch">
                                                    @if($tags->state == 1)
                                                        <input type="checkbox" name="state" value="{{$tags->state}}" checked/>
                                                  @else
                                                        <input type="checkbox"  name="state" />
                                                        @endif
                                                    <i class="mdui-switch-icon"></i>
                                                </label>
                                            </div>

                                            <div class="col-sm-4 col-sm-offset-3" style="padding-top: 10px">
                                                <button class="btn btn-primary" type="submit">提交</button>
                                                <a class="btn btn-outline btn-success " href="{{route('admin.tag.index')}}">返回</a>
                                            </div>
                                        </div>

                                    </form>
                        </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    <script src="{{@asset('static/admin/js/jquery.min.js')}}"></script>
    <script src="{{@asset('static/admin/js/bootstrap.min.js')}}"></script>
</body>
</html>