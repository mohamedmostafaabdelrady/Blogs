@extends('dashboard.base')
@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">New Post</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                   <form action="/posts" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                    <label class="font-weight-bold" for="title">Post Title</label>
                                    <input class="form-control" type="text" name="title">
                                    <label class="font-weight-bold" for="description">Post Description</label>
                                    <input class="form-control" type="text" name="description">
                                    <label class="font-weight-bold" for="content">Post Content</label>
                                    <input class="form-control" type="text" name="content"> 
                                    <label class="font-weight-bold" for="cat_id">Category</label>
                                    {!!Form::select('cat_id',\App\Category::all()->pluck('name','id'),null,["class"=>"form-control"]) !!}
                                            <br>
                                     <button  type="submit" class="btn btn-primary btn-lg "> Add Post
                                     </button>
                                  </form>
                        @if(count($errors)>0)
                           <ul>
                            @foreach($errors->all() as $error)
                             <br>
                            <li class="alert alert-danger">{{$error}}</li>
                            @endforeach
                           </ul>
                      @endif
@endsection