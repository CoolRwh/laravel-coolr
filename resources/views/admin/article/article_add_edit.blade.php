<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link href="/static/admin/css/bootstrap.min14ed.css" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/style.min862f.css" rel="stylesheet">
    <link href="{{@asset('static/web/css/mdui.min.css')}}" rel="stylesheet">
{{--    图片上传--}}
    <link href="{{@asset('static/web/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{@asset('static/admin/plugins/fileinput/js/locales/zh.js')}}" rel="stylesheet">
    <link href="{{@asset('static/admin/plugins/fileinput/css/fileinput.css')}}" rel="stylesheet">
{{--    富文本--}}
    <link href="{{@asset('static/admin/plugins/fileinput/css/fileinput.css')}}" rel="stylesheet">

</head>
<style>
    .mdui-checkbox{
        padding-right: 20px;
    }
    .form-group{
      margin-top: 10px;
    }
</style>

<body class="gray-bg">

<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">

        @if(!isset($articles))
            <form action="{{route('admin.article.store')}}" method="post">
                @csrf
            @else
                    <form action="{{route('admin.article.store',[$articles->id])}}" method="post">
                        @method('PUT')
            @endif



        <div class="col-sm-8">
            <div class="ibox">
                <div class="ibox-content">
                    <h2>文章内容 | <a href="{{@route('admin.article.index')}}"> 返回列表</a></h2>
                    <p>
                        编写文章的主题内容！
                    </p>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content no-padding"  >
                                    <textarea style="height:500px;" name="content" id="editor" >

                                        {{old('content')}}
                                    </textarea>

                                {{--    <div class="summernote" style="height: 100px;" >

                                        的对对对
                                    </div>--}}

                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </div>





        <div class="col-sm-4">
            <div class="ibox ">
                <div class="ibox-content">
                    <h2>文章设置</h2>
                    <p>
                        设置文章的相关信息！
                    </p>

                    <div class="ibox-content">
                            <div class="form-group">

                                <div class="mdui-textfield mdui-textfield-floating-label">
                                    <label class="mdui-textfield-label">文章标题</label>
                                    <textarea class="mdui-textfield-input" name="title" maxlength="50"></textarea>
                                </div>

                            </div>
{{--文章分类--}}
                        <div class="form-group">
                            <div >
                                <label >文章所属分类：</label>
                                <select class="mdui-select" mdui-select="{position: 'bottom'}" name="cate_id">

                                    @foreach($cates as $k)
                                    <option  value="{{$k->id}}">{{$k->cate_name}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>

{{--                        文章标签--}}
                            <div class="form-group ">
                                <label >标签</label>
                                <div class="mdui-divider"></div>
                                <div >
                                    @foreach($tags as $key)
                                    <label class="mdui-checkbox">
                                        <input type="checkbox" name="tag_id[]" value="{{$key->id}}"/>
                                        <i class="mdui-checkbox-icon"></i>
                                        {{$key->tag_name}}
                                    </label>
                                        @endforeach
                                </div>
                            </div>
                        {{--                        是否推荐--}}
                        <div class="form-group">
                            <label >是否发布【NO | YES】</label>
                            <div class="mdui-divider"></div>
                            <div >
                                <label class="mdui-switch">
                                    <input type="checkbox" name="isopen"  checked="">
                                    <i class="mdui-switch-icon"></i>
                                </label>
                            </div>
                        </div>
                        {{--                        缩略图--}}
                        <div class="form-group">
                            <label >文章缩略图</label>
                            <div class="mdui-divider"></div>
                            <div >
                                <div class="form-group">
                                    <input id="file-5" class="file" type="file" multiple data-preview-file-type="any" data-upload-url="{{route('admin.image.update')}}">
                                    <input type="hidden" name="titlepic" value="http://log.coolr.top/static/web/images/tu.jpg">
                                </div>

                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">保存</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</form>
    </div>
</div>

<script src="{{@asset('static/web/js/jquery.min.js')}}"></script>
<script src="{{@asset('static/web/js/mdui.min.js')}}"></script>
<script src="{{@asset('static/admin/js/bootstrap.min.js')}}"></script>
<script src="{{@asset('static/admin/plugins/fileinput/js/fileinput.js')}}"></script>
<script src="{{@asset('static/admin/plugins/fileinput/js/locales/zh.js')}}"></script>
{{--富文本--}}
<script type="text/javascript" charset="utf-8" src="{{@asset('static/admin/plugins/ueditor/ueditor.config.js')}}"></script>
<script type="text/javascript" charset="utf-8" src="{{@asset('static/admin/plugins/ueditor/ueditor.all.min.js')}}"></script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="{{@asset('static/admin/plugins/ueditor/lang/zh-cn/zh-cn.js')}}"></script>

<script type="text/javascript">
    console.log('ssssss');
</script>
<script type="text/javascript">
    var ue = UE.getEditor('editor');
</script>

<script type="text/javascript">
    $("#file-5").fileinput({
        language: 'zh', //设置语言
        uploadUrl: '#', // 单独上传可以写入上传地址   上面的data-upload-url="#" 也可以写上地址  这样就可以在显示框中上传了
        allowedFileExtensions : ['jpg', 'png','gif','jpeg'],
        overwriteInitial: false,   //忘记了这个
        maxFileSize: 1000,       //单个文件大小限制 Kb
        maxFilesNum: 2,
        maxFileCount:1,     //最大可上传几张图片
        dropZoneEnabled:false, //是否显示图片拖拽区域
        showUpload: true,   //是否显示上传标志
        showCaption: true,    //是否显示下框
        allowedFileTypes: ['image', 'video', 'flash'],
    });
</script>




</body>

</html>


