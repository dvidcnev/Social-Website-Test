@extends('layout')

@section('css')
<link rel="stylesheet" href="{{url('css/edit.css')}}">
@endsection

@section('content')

@if ($errors->any())
   <div class="alert alert-danger">
     <ul>
     @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
     </ul>
   </div>
@endif

<div id="createmain" class="d-flex">
    <h1 class="my-4">Edit</h1>
    <form action="{{  route('posts.update', ['post' => $post->id]) }}" method="post" enctype="multipart/form-data">
            <!-- Add CSRF Token -->
            @csrf
            @method('PUT')
        <div class="form-group py-3">
            <h2>Post name</h2>
            <input type="text" class="form-control w-25 m-auto text-center" name="name" value="{{$post->name}}" required>
        </div>
        <div class="form-group py-3">
            <h2>Description</h2>
            <input type="text" class="form-control w-25 m-auto" name="description"  value="{{$post->description}}" maxlength = "200" required>
        </div>
        <div class="form-group flexing py-3">
            <img class="img-thumbnail" src="{{url('storage/pictures/'.$post->file_path)}}">
            <input id="filebutton" class="btn" type="file" name="file" value="{{$post->file_path}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    
@endsection