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

}
