@extends('dashboard.base')
@section('content')
  <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Show Posts</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>posts List</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Category Name</th>
                                            <th>Post title</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($posts as $post)
                                         <tr>
                                            
                                            <td>{{$post->category->name}}</td>
                                            <td>{{$post->title}}</td>
                                            <td>
                                            <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
                                            </td>
                                            <td>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post], 'onsubmit' => 'return confirmDelete()']) !!}
                                                <button type="submit" class="btn btn-danger btn-circle btn-md"><i class="fa fa-times"></i>
                                                </button>
                                               {!! Form::close() !!}      
                                            </td>
                                         </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
<script type="text/javascript">
           function confirmDelete() {
                return confirm('Are you sure you want to delete?');
            }
       </script>
@endsection