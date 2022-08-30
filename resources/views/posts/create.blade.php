@extends('layout')

@section('css')
<link rel="stylesheet" href="{{url('css/create.css')}}">
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
    <h1 class="my-4">Create a post</h1>
    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            <!-- Add CSRF Token -->
            @csrf
        <div class="form-group py-3">
            <h2>Post name</h2>
            <input type="text" class="form-control w-25 m-auto text-center" name="name" required>
        </div>
        <div class="form-group py-3">
            <h2>Description</h2>
            <input type="text" class="form-control w-25 m-auto" name="description" maxlength = "200" required>
        </div>
        <div class="form-group flexing py-3">
            <input id="filebutton" class="btn" type="file" name="file" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    
@endsection