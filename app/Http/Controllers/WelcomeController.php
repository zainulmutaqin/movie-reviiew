<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;

class WelcomeController extends Controller
{
    public function welcome(){
        $articles = Article::orderBy('created_at', "desc")->paginate(5);

        return view('welcome', compact('articles'));
    }

    public function cdetail($slug_category){
        $categories = Article::with('category')->whereHas('category', function($q) use($slug_category) {
            $q->where('slug', '=', $slug_category);})
            ->first();
            

        return view ('cdetail', compact('categories'));
    }

    public function detail($slug_category, $slug){
        $article =  $categories = Article::with('category')->whereHas('category', function($q) use($slug_category) {
            $q->where('slug', '=', $slug_category);})
            ->where('slug', $slug)
            ->first();
    
        return view ('detail', compact('article'));
    }
}
