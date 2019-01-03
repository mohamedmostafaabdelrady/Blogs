<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view ('dashboard.posts.show-posts',compact('posts'));
    }

     public function index2()
    {
        $posts=Post::all();
        $categories=Category::all();
        return view ('front.index',compact('posts','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dashboard.posts.create-post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'title'=>'required|max:10',
        'description'=>'required|min:10',
        'content'=>'required|min:10',
        'cat_id'=>'required',
        ]);
      Post::create($request->all());
      return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $post=Post::find($id);
     $categories=Category::all();
     return view('front.post',compact('post','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $post=Post::findOrFail($id);
      return view('dashboard.posts.edit-post')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
        'title'=>'required|max:10|unique:posts,title,'.$id,
        'description'=>'required|min:10',
        'content'=>'required|min:10',
        'cat_id'=>'required',
        ]);
      $post=Post::findOrFail($id);
      $post->update($request->all());
       return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post=post::find($id);
      $post->delete();
      return redirect('/posts');
    }
}
