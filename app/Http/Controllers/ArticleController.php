<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use File;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $articles = Article::all();

        return view('article.index', compact('articles'));
    }

    public function welcome(){
        $articles = Article::orderBy('created_at', "desc")->paginate(5);

        return view('welcome', compact('articles'));
    }

    public function detail($id){
        $article = Article::find($id);

        return view ('detail', compact('article'));
    }

    public function show($id){
        $article = Article::find($id);

        return view ('article.show', compact('article'));
    }

    public function create(){
        $categories = Category::all();
        return view('article.create', compact('categories'));
    }

    public function store(Request $request){
        $articles = new Article;
        $articles->title = $request->title;
        $articles->slug = str_slug($request->title);
        $articles->content = $request->content;
        $articles->category_id = $request->category_id;
        if($request->hasfile('banner')){
            $file = $request->file('banner');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/banner/', $filename);
            $articles->banner = $filename;
        }
        $articles->save();
        return redirect()->route('article.index');
    }

    public function edit($id){
        $article = Article::find($id);
        $categories = Category::all();

        return view ('article.edit', compact('article','categories'));
    }

    public function update($id, Request $request){
        $article = Article::find($id);
        $nama = $article->banner;

        $article->title = $request->title;
        $article->slug = str_slug($request->title);
        $article->content = $request->content;
        $article->category_id = $request->category_id;
        if($request->hasfile('banner')){
            $file = $request->file('banner');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/banner/', $filename);
            $article->banner = $filename;
        }
        $article->save();
        
        return redirect()->route('article.index');
    }

    public function destroy($id){
        $article = Article::find($id);
        $article->delete();

        return redirect()->route('article.index');
    }
}
