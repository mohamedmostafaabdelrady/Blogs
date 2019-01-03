@extends('dashboard.base')
@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create Category</h1>
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
                        <form action="/categories" method="POST">
                         {{csrf_field()}}
                         <div class="form-group">
                        <label class="font-weight-bold" for="name">Category Name</label>
                        <input class="form-control" type="text" name="name">
                        </div>
                        <input class="btn btn-primary" type="submit" value="Done">
                        </form>
                    </div>
                </div>
            </div>
        </div>
                                   @if(count($errors)>0)
                                        <ul>
                                         @foreach($errors->all() as $error)
                                            <li class="alert alert-danger">{{$error}}</li>
                                         @endforeach
                                        </ul>
                                    @endif

@endsection