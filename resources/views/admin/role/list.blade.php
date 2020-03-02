@component('componets.admin_public_list',[
    'title' => "角色",
    'add_url' => "role/create",
    'list_url' => "admin.role.index"
    ])
    <table class="table">
        <thead>
        <tr >
            <th>角色ID</th>
            <th>角色名称</th>
            <th>角色描述</th>
            <th>排序</th>
            <th>操作</th>

        </tr>
        </thead>
        <tbody>

        @foreach($roles as $role)
        <tr >
            <th>{{$role->id}}</th>
            <th>{{$role->role_name}}</th>
            <th >{{$role->desc}}</th>
            <th >{{$role->sort}}</th>
            <th>
                <a class="btn btn-outline btn-warning " href="{{route('admin.role.index')}}">分配权限</a>
                <a class="btn btn-outline btn-success " href="{{route('admin.role.edit',[$role->id])}}">修改</a>
                <a class="btn btn-outline btn-danger delBtn " data-msg="{{$role->role_name}}" data-url="role/{{$role->id}}">删除</a>
            </th>

        </tr>

            @endforeach
        </tbody>

    </table>

@endcomponent