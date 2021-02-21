<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;

class ArticlesController extends Controller
{
    public function index()
    {
        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
            return view('articles.index', [
                'articles' => $articles
            ]);
        }
        $articles = Article::latest()->get();

        return view('articles.index', [
            'articles' => $articles
        ]);
    }

    public function show(Article $article)
    {
        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function create()
    {
        return view('articles.create', [
            'tags' => Tag::all()
        ]);
    }

    public function store()
    {
        $article = new Article($this->validateArticle($this->validateArticle()));
        $article->user_id = 1;
        $article->save();

        $article->tags()->attach(request('tags'));

        return redirect(route('articles.index'));
    }

    protected function validateArticle(): array
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }

    public function edit(Article $article)
    {
        return view('articles.edit', [
            'article' => $article
        ]);
    }

    public function update(Article $article)
    {
        $article->update($this->validateArticle());

        return redirect($article->path());
    }
}
