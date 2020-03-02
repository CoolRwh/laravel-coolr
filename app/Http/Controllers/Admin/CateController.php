<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\model\Cate;
use Illuminate\Http\Request;

class CateController extends Controller
{

    /**
     * @info 栏目列表页面
     *
     * @param  \App\model\Cate  $cate
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Cate $cate)
    {
        $cates = $cate->orderBy('id', 'asc')->get();

        return view('admin.cate.list', compact('cates'));
    }

    /**
     * @info 栏目添加页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        //
        return view('admin.cate.cate_add_edit');
    }

    /**
     * @info 栏目添加
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $cate            = new Cate();
        $cate->cate_name = $request->input('cate_name');
        $cate->save();

        return redirect('admin/cate')->with('success', '添加成功！');
    }

    /**
     * @info 栏目详细信息
     *
     * @param $id
     */
    public function show($id)
    {
        //

    }

    /**
     * @info 栏目修改页面
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $cates = Cate::find($id);

        return view('admin.cate.cate_add_edit', compact('cates'));
    }

    /**
     * @info    栏目修改
     *
     * @param  \Illuminate\Http\Request  $request
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        //
        $res = Cate::where('id', $id)->update(
          ['cate_name' => $request->input('cate_name')]
        );
        if ($res) {
            return redirect('admin/cate')->with('success', '修改成功!');
        }

    }

    /**
     * @info 栏目删除
     *
     * @param $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $res = Cate::destroy($id);
        if ($res) {
            session()->flash('success', '删除成功！');

            return response()->json(['code' => 1, 'msg' => '删除成功！']);
        } else {
            return response()->json(['code' => 0, 'msg' => '删除失败！']);
        }
    }
}
