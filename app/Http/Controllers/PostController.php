<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;

class PostController extends Controller
{
    public function index() {

        // テーブルからすべてのデータを取得し、変数に代入する
        $posts = DB::table('posts')->get();
        return view('posts.index',compact('posts'));
}
        public function show($id) {
    // $idに基づいてデータベースから商品を取得
    $post = Posts::find($id);

    
    // 取得した商品データをビューに渡して表示
    return view('posts.show', compact('post'));
}
public function create() {
    return view('posts.create');
}

public function store(Request $request) {
    // バリデーションを設定する
    $request->validate([
        'title' => 'required|max:20',
        'content' => 'required|max:200',
    ]);
     // フォームの入力内容をもとに、テーブルにデータを追加する
     $post = new Posts();
     $post->title = $request->input('title');
     $post->content = $request->input('content');
     $post->save();

     // リダイレクトさせる
     return redirect("/posts/");
 }      
    }

