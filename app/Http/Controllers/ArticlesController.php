<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{   
    public function index(){

        $articles = Article::latest()->get();
        return view('articles.index', ['articles' => $articles]);
    }

    public function show($id){
        
        $article = Article::find($id);

        return view('articles.show', ['article'=>$article]);
    }
}
