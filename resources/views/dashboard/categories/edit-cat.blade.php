@extends('dashboard.base')
@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Category</h1>
                </div>
            </div>
{{Form::model($category, ['route' => ['categories.update', $category->id],'method'=>'patch'])}}
    <div class="form-group">
    <label class="font-weight-bold" for="name">Category Name</label>
    {{Form::text('name',null,['class'=>'form-control'])}}
</div>
     <input class="btn btn-primary" type="submit" value="Update">
                                   @if(count($errors)>0)
                                        <ul>
                                         @foreach($errors->all() as $error)
                                         <br>
                                            <li class="alert alert-danger">{{$error}}</li>
                                         @endforeach
                                        </ul>
                                    @endif
@endsection