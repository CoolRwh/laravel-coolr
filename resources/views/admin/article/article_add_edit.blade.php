<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link href="/static/admin/css/bootstrap.min14ed.css" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min93e3.css" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/style.min862f.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <!--图片上传-->
    <link rel="stylesheet" type="text/css" href="/static/admin/css/plugins/webuploader/webuploader.css">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/demo/webuploader-demo.min.css">

</head>

<body class="gray-bg">

<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">

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
                                <div class="ibox-content no-padding" >

                                    <div class="summernote" style="height: 100px;" >


                                    </div>

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
                        <form method="get" class="form-horizontal">
                            <div class="form-group">
                                <label class=" control-label">文章标题:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <!-- <label class=" control-label">文章缩略图：</label>
                                 <div class="col-sm-12">
                                     <img width="240" height="140" src="/static/index/images/about.jpg">
                                 </div>-->


                                <div class="ibox-content">
                                    <div class="page-container">
                                        <p>文章缩略图：</p>
                                        <div id="uploader" class="wu-example">
                                            <div class="queueList">
                                                <div id="dndArea" class="placeholder">
                                                    <div id="filePicker"></div>
                                                    <p>或将照片拖到这里，单次最多可选300张</p>
                                                </div>
                                            </div>
                                            <div class="statusBar" style="display:none;">
                                                <div class="progress">
                                                    <span class="text">0%</span>
                                                    <span class="percentage"></span>
                                                </div>
                                                <div class="info"></div>
                                                <div class="btns">
                                                    <div id="filePicker2"></div>
                                                    <div class="uploadBtn">开始上传</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>




                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">标签</label>
                                <div class="col-sm-10">
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="1">生活</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="2">游戏</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="3">php</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="4">ThinkPhp</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="5">laravel</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="6">linux</label>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">推荐</label>
                                <div class="col-sm-10">
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="1">是</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/static/admin/js/jquery.min.js"></script>
<script src="/static/admin/js/bootstrap.min.js"></script>
<script src="/static/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/static/admin/js/content.min.js"></script>
<script src="/static/admin/js/plugins/summernote/summernote.min.js"></script>
<script src="/static/admin/js/plugins/summernote/summernote-zh-CN.js"></script>
<script src="/static/admin/js/plugins/iCheck/icheck.min.js"></script>

<script src="/static/admin/js/plugins/webuploader/webuploader.min.js"></script>
<script src="/static/admin/js/demo/webuploader-demo.min.js"></script>


<script>

    var BASE_URL = 'http://coolr.top/public/static/admin/';


    $(document).ready(function(){
        $(".summernote").summernote({lang:"zh-CN"})});
    var edit=function(){
        $("#eg").addClass("no-padding");
        $(".click2edit").summernote({lang:"zh-CN",focus:true})};
    var save=function(){$("#eg").removeClass("no-padding");
        var aHTML=$(".click2edit").code();$(".click2edit").destroy()};

    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>



</body>

</html>


