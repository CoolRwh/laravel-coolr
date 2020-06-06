@component('componets.admin_public_list',[
    'title' => "文章",
   'add_url' => "article/article",
   'list_url' => "admin.article.index"
    ])

    <table class="table">
        <thead>
        <tr>
            <th>文章ID</th>
            <th>文章栏目</th>
            <th>文章标题</th>
            <th>缩略图</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->created_at}}</td>
                <td>
                    <a type="button" class="btn btn-outline btn-success" href="{{route('admin.article.edit',[$article->id])}}">修改</a>
                    <a class="btn btn-outline btn-danger delBtn " data-msg="{{$article->title}}"
                       data-url="article/{{$article->id}}">删除</a>
                </td>
            </tr>

        @endforeach

        </tbody>

    </table>


@endcomponent