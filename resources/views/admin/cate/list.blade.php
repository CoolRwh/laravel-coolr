@component('componets.admin_public_list',[
    'title' => "栏目",
    'add_url' => "cate/create",
    'list_url' => "admin.cate.index"
    ])
    <table class="table">
        <thead>
        <tr>
            <th>栏目ID</th>
            <th>栏目名称</th>
            <th>创建时间</th>
            <th>操作</th>

        </tr>
        </thead>
        <tbody>

        @foreach($cates as $cate)
            <tr>
                <td>{{$cate->id}}</td>
                <td>{{$cate->cate_name}}</td>
                <td>{{$cate->created_at}}</td>
                <td>
                    <a  type="button" class="btn btn-outline btn-success" href="{{route('admin.cate.edit',[$cate->id])}}">修改</a>
                    <a class="btn btn-outline btn-danger delBtn " data-msg="{{$cate->cate_name}}" data-url="cate/{{$cate->id}}">删除</a>
                </td>
            </tr>

        @endforeach
        </tbody>

    </table>

@endcomponent