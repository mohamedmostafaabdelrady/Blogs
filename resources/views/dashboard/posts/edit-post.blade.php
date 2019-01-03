@extends('dashboard.base')
@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Post</h1>
                </div>
            </div>
{{Form::model($post, ['route' => ['posts.update', $post->id],'method'=>'patch'])}} 

	<div class="form-group">
	<label class="font-weight-bold" for="title">Post Title</label>
	{{Form::text('title',null,['class'=>'form-control'])}}
	<label class="font-weight-bold" for="description">Post description</label>
	{{Form::textarea('description',null,['class'=>'form-control','style'=>'height:100px;'])}}
    <label class="font-weight-bold" for="content">Post Content</label>
  {{Form::textarea('content',null,['class'=>'form-control','style'=>'height:100px;'])}}
  <label class="font-weight-bold" for="cat_id">Category</label>
  {!!Form::select('cat_id',\App\Category::all()->pluck('name','id'),null,["class"=>"form-control"]) !!}
  </div>
     <input type="hidden" name="category_id" value="{{$post->category_id}}">
     <input class="btn btn-primary btn-lg" type="submit" value="Done">
{{Form::close()}}
                                   @if(count($errors)>0)
                                        <ul>
                                         @foreach($errors->all() as $error)
                                         <br>
                                            <li class="alert alert-danger">{{$error}}</li>
                                         @endforeach
                                        </ul>
                                    @endif
@endsection