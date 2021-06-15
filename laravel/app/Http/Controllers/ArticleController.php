<?php

namespace App\Http\Controllers;

//===========ここから追加==========
use App\Http\Requests\ArticleRequest;
//===========ここまで追加==========
//==========ここから追加==========
use App\Article;
//==========ここまで追加==========
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        //==========ここから追加==========
        $articles = Article::all()->sortByDesc('created_at');
        //==========ここまで追加==========

        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.create');
    }

    //==========ここから追加==========
    public function store(ArticleRequest $request, Article $article)
    {
        $article->fill($request->all()); //-- この行を追加
        $article->user_id = $request->user()->id;
        $article->save();
        return redirect()->route('articles.index');
    }
    //==========ここまで追加==========

    //==========ここから追加========== 
    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);    
    }
    //==========ここまで追加==========

}
