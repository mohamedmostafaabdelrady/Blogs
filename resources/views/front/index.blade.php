@extends('front.front_master')
@section('content')
    <!-- Page Content -->


        <!-- Blog Entries Column -->
        <div class="col-md-12">

          <h1 class="my-4">Posts
            <small>(Category)</small>
          </h1>

         <div class="row">
            <!-- Blog Post -->
          @foreach($posts as $post)
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="card mb-4 text-center">
                <div class="card-body">
                  <h2 class="card-title">{{$post->title}}(<span>{{$post->category->name}}</span>)</h2>
                  <p class="card-text">{{$post->description}}</p>
                  <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary">Read More &rarr;</a>
                </div>
              </div>
            </div>
          @endforeach
         </div>
           

        </div>


      <!-- /.row -->


   @endsection