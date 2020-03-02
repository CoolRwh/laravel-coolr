<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    /**
     * @info 规则列表
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin.rule.list');
    }

    /**
     * @info 规则添加页面
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.rule.rule_add_edit');
    }

    /**
     * @info
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * @info 规则修改页面
     *
     * @param  int  $id
     * @return $id 所对应的数据
     */
    public function edit($id)
    {
        //
    }

    /**
     * @info 修改方法
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * @info 删除方法
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
