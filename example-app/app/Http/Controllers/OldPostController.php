<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create(){
        return view('post.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:400',
        ]);
        $validated['user_id'] = $request->user()->id;

        $post = Post::create($validated);
        return back()->with('message', '保存しました');
    }
    // テーブルデータを条件付きで取得
    public function index() {
        $posts = Post::where('user_id', Auth::user()->id)->get();
        return view('post.index', compact('posts'));
    }
    // 個別表示機能
    public function show(Post $post) {
        return view('post.show', compact('post'));
    }
    // 編集画面
    public function edit(Post $post) {
        return view('post.edit', compact('post'));
    }
    // 更新
    public function update(Request $request, Post $post) {
        $validated = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:400',
        ]);
        $validated['user_id'] = $request->user()->id;

        $post->update($validated);

        return back()->with('message', '更新しました');
    }
    // 削除
    public function destroy(Request $request, Post $post) {
        $post->delete();
        $request->session()->flash('message', '削除しました');
        return redirect()->route('post.index');
    }
}
