<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {

        // テーブルからすべてのデータを取得し、変数に代入する
        $posts = DB::table('posts')->get();
        $name= "mizuno";
        return view('posts/index',compact('posts','name'));
}
}
