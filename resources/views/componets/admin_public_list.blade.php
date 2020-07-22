
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{$title}}列表</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="/static/admin/css/bootstrap.min14ed.css" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min93e3.css" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/style.min862f.css" rel="stylesheet">
    <link href="{{asset('static/admin/layui/css/layui.css')}}" rel="stylesheet">
    <link href="{{@asset('static/web/css/mdui.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">

</head>

<body class="gray-bg">

<div class="wrapper wrapper-content animated fadeInRight">
    @include('admin.layouts._message')
<div class="app" id="app">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox-content forum-container">

                    <h2>{{$title}}列表</h2>
                    <div class="ibox-content">
                        <div class="">

                                <a type="button" class="btn btn-primary addBtn" href="{{$add_url}}">添加</a>


                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addRole">
                                删除
                            </button>

                            <a type="button" class="btn btn-outline btn-success" href="{{route($list_url)}}"> 刷 新 </a>
                        </div>
                    </div>

                    {{--表格站位符--}}
                    {{$slot}}
            </div>
        </div>
    </div>
</div>
    <!-- import Vue before Element -->
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <!-- import JavaScript -->
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>
<script src="{{@asset('static/admin/js/jquery.min.js')}}"></script>
<script src="{{@asset('static/admin/js/bootstrap.min.js')}}"></script>
<script  src="{{ asset('static/admin/layui/layui.all.js') }}"></script>


<script>
    //修改页面
    $('.editBtn').click(function() {

        var url=$(this).attr('data-url');
        console.log(url);
        //将iframeObj传递给父级窗口,执行操作完成刷新
        layer.open({
            type: 2,
            title: '{{$title}}修改',
            maxmin: true, //开启最大化最小化按钮
            area: ['800px', '600px'],
            content: url,
        });

    })

    //顶部批量删除
    $('.delBtn').click(function() {

        var url=$(this).attr('data-url');
        var msg=$(this).attr('data-msg');

        layer.confirm('确定要删除 【'+msg+'】吗？', {icon: 3, title:'提示'}, function(index){
         $.post(url,{'_token':"{{csrf_token()}}",'_method':'delete'},function (data) {
             if (data.code === 1){
                 window.location.reload();
             }
         })

        });
        return false;
    })
</script>

    <script>
        new Vue({
            el: '#app',
            data: function() {
                return { visible: false }
            },
            created(){
                this.getMsg();
            },
            methods:{
                getMsg() {
                    this.$message.success('这是一条消息提示');
                }
            }
        })
    </script>
</body>

</html>

