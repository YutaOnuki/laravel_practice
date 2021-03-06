<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controllers;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    public function index(){
      $articles = Article::latest('published_at')->latest('created_at')
      ->published()
      ->get();
      return view('articles.index', compact('articles'));
    }

    public function show($id){
      $article = Article::findorfail($id);
      return view('articles.show', compact('article'));
    }

    public function create(){
      return view('articles.create');
    }

    public function store(ArticleRequest $request){

      Article::create($request->validated());

      return redirect('articles');
    }
}
