@extends('front.front_master')
@section('content')
    <!-- Page Content -->
      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">
          <!-- Title -->
          <h1 class="mt-4">{{$post->title}}</h1>

          <!-- Author -->
          <p class="lead">
            <h3>(<span>{{$post->category->name}}</span>)</h3>
          </p>
          <!-- Post Content -->
          <p class="lead">{{$post->description}}</p>
          <p>{{$post->content}}</p>
        </div>

      </div>
      <!-- /.row -->
@endsection
