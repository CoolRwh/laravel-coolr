@component('componets.admin_public_list',[
    'title' => "文章",
   'add_url' => "article/create",
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


        </tbody>

    </table>


@endcomponent