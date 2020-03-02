@component('componets.admin_public_list',[
    'title' => "用户",
   'add_url' => "cate/create",
   'edit_url' => "cate/show/"
    ])

    <table class="table">
        <thead>
        <tr>
            <th>栏目ID</th>
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
                    <button type="button" class="btn btn-outline btn-success editBtn" data-id="{{$user->id}}">修改</button>
             {{--       <button type="button" class="btn btn-outline btn-success">权限</button>--}}
                    <button type="button" class="btn btn-outline btn-danger">删除</button>
                </td>
            </tr>

        @endforeach
        </tbody>

    </table>


@endcomponent