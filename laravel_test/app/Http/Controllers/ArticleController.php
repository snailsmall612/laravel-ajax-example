<?php

namespace App\Http\Controllers;

use App\Models\Article;
use View;

class ArticleController extends Controller{
    public function index(){
    	$articles = Article::all();
    	return View::make('article')->with('articles', $articles);
	}
}


