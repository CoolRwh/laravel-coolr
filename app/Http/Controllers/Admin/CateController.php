<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CateRequest;
use App\model\Cate;
use Illuminate\Http\Request;

class CateController extends Controller
{

    /**
     * 栏目列表页面
     * @param \App\model\Cate $cate
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Cate $cate)
    {
        $cates = $cate->orderBy('id', 'asc')->get();

        return view('admin.cate.list', compact('cates'));
    }

    /**
     * @info 栏目添加页面
     * @return View
     */
    public function create()
    {
        //
        return view('admin.cate.cate_add_edit');
    }

    /**
     * 栏目添加
     * @param $request
     * @return void
     */
    public function store(CateRequest $request)
    {
        $cate = new Cate();
        $cate->cate_name = $request->input('cate_name');

        $cate->save();

        return redirect('admin/cate')->with('success', '添加成功！');
    }

    /**
     * 栏目详细信息
     * @param int $id
     */
    public function show(int $id)
    {
        //
    }

    /**
     * 栏目修改页面
     * @access public
     * @param int $id
     * @return void
     */
    public function edit(int $id)
    {
        $cates = Cate::find($id);

        return view('admin.cate.cate_add_edit', compact('cates'));
    }

    /**
     *栏目修改
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, int $id)
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
     * 栏目删除
     * @param int $id
     * @return void
     */
    public function destroy(int $id)
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
