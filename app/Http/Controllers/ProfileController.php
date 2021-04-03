<?php

namespace App\Http\Controllers;
use App\User;
use Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    public function index(){
        $auth = Auth::user();
        $id = $auth->id;
        $profile = User::where('id',$id)->first();

        return view('profile.index', compact('profile'));
    }

    public function show($id){
        $category = Category::find($id);

        return view ('category.show', compact('category'));
    }

    public function create(){
        return view('profile.create');
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
}
