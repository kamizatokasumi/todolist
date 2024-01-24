<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    /**
     * 一覧画面
     */
    public function index()
    {
        $todo = todo::orderBy('id', 'desc')->paginate(10);
        return view('todos.index', compact('todo'));
    }

    /**
     * 登録画面
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * 登録処理
     */
    public function store(TodoRequest $request)
    {
        todo::create($request->all());
        \Session::flash('err_msg', 'ブログ登録しました');
        return redirect()->route('todos.index');
    }

    /**
     * 詳細画面表示
     */
    public function show($id)
    {
        $detail = todo::find($id);
        return view('todos.show', compact('detail'));
    }

    /**
     * 編集画面の表示
     */
    public function edit($id)
    {
        $todo = todo::find($id);
        return view('todos.edit', compact('todo'));
    }

    /**
     * 更新処理
     */
    public function update(Request $request, $id)
    {
        todo::where('id', $id)->update([
            "title" => $request->title,
            "description" => $request->description,
        ]);
        return redirect()->route('todos.index', $id);
    }

    /**
     * 削除処理
     */
    public function destroy($id)
    {
        // todoテーブルから指定のIDのレコード1件を取得
        $destroy = todo::find($id);
        // レコードを削除
        $destroy->delete();
        // 削除したら一覧画面にリダイレクト
        return redirect()->route('todos.index');
    }
}
