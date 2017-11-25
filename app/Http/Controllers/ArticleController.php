<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('user')->get();

        return view('articles.index', [
            'articles' => $articles
        ]);
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

    public function show($id)
    {
        $article = Article::where('id', '=', $id)->first();

        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function edit(Request $request, $id)
    {
        $article = Article::where('id', '=', $id)->first();

        return view('articles.edit', [
            'article' => $article
        ]);
    }

    public function update(Request $request, $id)
    {
        $article = Article::where('id', '=', $id)->first();
        $article->title = $request->title;
        $article->text = $request->text;

        $article->save();

        return redirect()->route('article.show', ['id' => $id]);
    }

    public function destroy($id)
    {
        // ISTO
        $article = Article::where('id', '=', $id)->first();

        $article->delete();

//        Article::destroy($id);

        return redirect()->route('article.index');
    }}
