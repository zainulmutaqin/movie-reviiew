<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class WelcomeController extends Controller
{
    public function welcome(){
        $articles = Article::orderBy('created_at', "desc")->paginate(5);

        return view('welcome', compact('articles'));
    }
    
    public function detail($id){
        $article = Article::find($id);

        return view ('detail', compact('article'));
    }
}
