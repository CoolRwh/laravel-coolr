<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Article;
use App\model\Cate;
use App\Model\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('admin.article.list', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cates = Cate::all();
        $tags = Tag::where('state', 1)->get();

        return view('admin.article.article_add_edit', compact('cates', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
//        dd($request->except('_token'));
        $data = $request->except('_token');
        isset($data['isopen']) ? $data['isopen'] = 1 : $data['isopen'] = 0;
        $articles = new Article();
        $articles->title = $data['title'];
        $articles->content = $data['content'];
        $articles->cate_id = $data['cate_id'];
        $articles->isopen = $data['isopen'];
        $articles->sharenum = 1;
        $articles->titlepic = $data['titlepic'];
        $articles->user_id = 1;
        try {
            $articles->save();
        } catch (\Exception $e) {
            return response()->json(['msg' => $e]);
        }

        return redirect('admin/article')->with('success', '添加成功！');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $article = Article::query()->find($id);
        $cates  = Cate::query()->get();
        $tags  = Tag::query()->get();
        return view('admin.article.article_add_edit',compact('article','cates','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Article::destroy($id);
        if ($res) {
            session()->flash('success', '删除成功！');

            return response()->json(['code' => 1, 'msg' => '删除成功！']);
        } else {
            return response()->json(['code ' => 0, 'msg' => '删除失败！']);
        }
    }
}
