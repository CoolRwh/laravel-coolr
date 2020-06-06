<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Model\Article;
use Illuminate\Http\Request;

class ArticleController extends BaseController
{
    /**
     * 获取文章详细信息
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function info(int $id)
    {

        $articles = Article::query()->find($id);

        if (!$articles){
            return redirect('/')->with('error','没有找到！');
        }
        $prev_article = Article::query()->where('id', '<', $id)->first(['id','title']);
        $next_article = Article::query()->where('id', '>', $id)->first(['id','title']);
        return view('web.article.info', compact('articles', 'prev_article', 'next_article'));
    }
}       
