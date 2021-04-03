<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();

        return view('category.index', compact('categories'));
    }

    public function show($id){
        $category = Category::find($id);

        return view ('category.show', compact('category'));
    }

    public function create(){
        $categories = Category::all();
        return view('category.create', compact('categories'));
    }

    public function store(Request $request){
        $category = new Category;
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->save();
        
        return redirect()->route('category.index');
    }

    public function edit($id){
        $category = Category::find($id);

        return view ('category.edit', compact('category'));
    }

    public function update($id, Request $request){
        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->save();
        
        return redirect()->route('category.index');
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('category.index');
    }
}
