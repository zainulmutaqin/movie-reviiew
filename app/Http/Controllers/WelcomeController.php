<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;

class WelcomeController extends Controller
{
    public function welcome(){
        $articles = Article::orderBy('created_at', "desc")->paginate(5);
        $cat = Category::get();

        return view('welcome', compact('articles','cat'));
    }

    public function cdetail($slug_category){
        $categories = Article::with('category')->whereHas('category', function($q) use($slug_category) {
            $q->where('slug', '=', $slug_category);})
            ->get();
            $category = Category::where('slug', '=', $slug_category)->get();
            $cat = Category::get();
                
            return view ('cdetail', compact('categories','category','cat'));
    }

    public function detail($slug_category, $slug){
        $cat = Category::get();
        $article =  $categories = Article::with('category')->whereHas('category', function($q) use($slug_category) {
            $q->where('slug', '=', $slug_category);})
            ->where('slug', $slug)
            ->first();
    
        return view ('detail', compact('article','cat'));
    }
}
