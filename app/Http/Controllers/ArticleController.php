<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function view(){
        $pageArticles=Article::all();
        return view('articles', compact('pageArticles'));
    }

    public function show($id){

            $pagearticle = Article::findOrfail($id);

            return view('article',compact('pageArticle'));
        
}
}