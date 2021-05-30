<?php

namespace App\Http\Controllers;

//==========ここから追加==========
use App\Article;
//==========ここまで追加==========
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        //==========ここから削除==========
        // // ダミーデータ
        // $articles = [
        //     (object) [
        //         'id' => 1,
        //         'title' => 'タイトル1',
        //         'body' => '本文1',
        //         'created_at' => now(),
        //         'user' => (object) [
        //             'id' => 1,
        //             'name' => 'ユーザー名1',
        //         ],
        //     ],
        //     (object) [
        //         'id' => 2,
        //         'title' => 'タイトル2',
        //         'body' => '本文2',
        //         'created_at' => now(),
        //         'user' => (object) [
        //             'id' => 2,
        //             'name' => 'ユーザー名2',
        //         ],
        //     ],
        //     (object) [
        //         'id' => 3,
        //         'title' => 'タイトル3',
        //         'body' => '本文3',
        //         'created_at' => now(),
        //         'user' => (object) [
        //             'id' => 3,
        //             'name' => 'ユーザー名3',
        //         ],
        //     ],
        // ];
        //==========ここまで削除==========
        //==========ここから追加==========
        $articles = Article::all()->sortByDesc('created_at');
        //==========ここまで追加==========

        return view('articles.index', ['articles' => $articles]);
    }
}
