@component('componets.admin_public_list',[
    'title' => "权限",
    'add_url' => "permission/create",
    'list_url' => "admin.permission.index"
    ])
    <table class="table">
        <thead>
        <tr >
            <th>权限ID</th>
            <th>权限名称</th>
            <th>权限地址</th>
            <th>模块</th>
            <th>是否在栏目显示</th>
            <th>操作</th>

        </tr>
        </thead>
        <tbody>


        @foreach($permissions as $permission)
            @if($permission->pid == 0)
        <tr>
            <td>{{$permission->id}}</td>
            <td>{{$permission->per_name}}</td>
            <td>{{$permission->per_url}}</td>
            <td>{{$permission->model}}</td>
            @if($permission->show == 1)<td>显示</td>@else<td>不显示</td>@endif
            <td>
                <a  type="button" class="btn btn-outline btn-success" href="{{route('admin.permission.edit',[$permission->id])}}">修改</a>
                <a class="btn btn-outline btn-danger delBtn " data-msg="{{$permission->per_name}}" data-url="permission/{{$permission->id}}">删除</a>
            </td>
        </tr>
        @foreach($permissions as $v)
        @if($v->pid == $permission->id)
            <tr>
                <td>{{$v->id}}</td>
                <td>{{$v->per_name}}</td>
                <td>{{$v->per_url}}</td>
                <td>{{$v->model}}</td>
                @if($v->show == 1)<td>显示</td>@else<td>不显示</td>@endif
                <td>
                    <a  type="button" class="btn btn-outline btn-success" href="{{route('admin.permission.edit',[$v->id])}}">修改</a>
                    <a class="btn btn-outline btn-danger delBtn " data-msg="{{$v->per_name}}" data-url="permission/{{$v->id}}">删除</a>
                </td>
            </tr>
        @endif

            @endforeach
            @endif


        @endforeach

        </tbody>

    </table>

@endcomponent