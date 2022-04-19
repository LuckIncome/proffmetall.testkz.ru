<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() 
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(12);

        $page = Page::where(['type' => 'articles'])->firstOrFail();
        return view('pages.articles.index', compact(
            'page',
            'articles'
        ));
    }

    public function show($article) 
    {
        $article_one = Article::where('slug', $article)->first();

        $articles = Article::where('slug', '!=', $article)->orderBy('created_at', 'desc')->get();

        return view('pages.articles.show', compact(
            'article_one',
            'articles'
        ));
    }
}
