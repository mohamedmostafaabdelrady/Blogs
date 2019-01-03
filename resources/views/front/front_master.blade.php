<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blogs App</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog-post.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">Blogs App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/admin">Admin
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li>
                <div class="dropdown">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"  style="background-color:black ">
                  Categories
                  </button>
                 <div class="dropdown-menu">
                   @foreach($categories as $cat)
                  <a class="dropdown-item" href="/category/{{$cat->id}}/posts">{{$cat->name}}</a>
                  @endforeach
                 </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container" style="min-height: 510px">

      @yield('content')
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
  
  <footer class="py-5 bg-dark">
        <p class="m-0 text-center text-white">junior PHP developer assignment </p>
      <!-- /.container -->
    </footer>

</html>
