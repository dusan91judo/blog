<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('user')->get();
        dd($articles->toArray());
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $user = auth()->user();

        $article = new Article();
        $article->title = $request->title;
        $article->text = $request->text;
        $article->user()->associate($user);
        $article->save();

        return redirect()->route('article.index');
    }
}
