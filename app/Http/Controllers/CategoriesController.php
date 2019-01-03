<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Category;
class CategoriesController extends Controller
{
        public function index(){
           $categories=Category::all();
    	return view ('dashboard.categories.show-cat',compact('categories'));
    }

      public function create(){
    	return view ('dashboard.categories.create-cat');
    }

       public function store(Request $request){
      $this->validate($request,[
        'name'=>'required|max:10|unique:categories,name',
        ]);  
      $user=Auth::user();
      Category::create($request->all());
      return redirect('/categories');
    }

      public function show($id){
      $category=Category::findOrFail($id);
      return view('dashboards.categories.show-cat');
    }

      public function edit($id){
      $category=Category::findOrFail($id);
      return view('dashboard.categories.edit-cat')->with('category',$category);
    }

      public function update(Request $request , $id){
        $this->validate($request,[
        'name'=>'required|max:10|unique:categories,name,'.$id,
        ]);
      $category=Category::findOrFail($id);
      $category->update($request->all());
       return redirect('/categories');
    }

  public function destroy($id){
      $category=category::find($id);
      $category->posts()->delete();
      $category->delete();
      return redirect('/categories');
    }

 public function user_show($id){
  $categories =Category::all();
      $category=Category::findOrFail($id);
      $posts=$category->posts;
      return view('front.index',compact('posts','category','categories'));
    }

}
