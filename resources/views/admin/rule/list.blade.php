@component('componets.admin_public_list',[
    'title' => "规则",
    'add_url' => "rule/create",
    'list_url' => "admin.rule.index"
    ])
    <table class="table">
        <thead>
        <tr >
            <th>规则ID</th>
            <th>规则名称</th>
            <th>规则地址</th>
            <th>操作</th>

        </tr>
        </thead>
        <tbody>
        <tr >
            <th>1</th>
            <th>后台首页</th>
            <th style="color:#ed5565">App\Http\Controllers\Admin\IndexController@index</th>
            <th>
                <a class="btn btn-outline btn-danger " href="{{route('admin.rule.index')}}">删除</a>
                <a class="btn btn-outline btn-success " href="{{route('admin.rule.index')}}">修改</a>
            </th>

        </tr>
        </tbody>

    </table>

@endcomponent