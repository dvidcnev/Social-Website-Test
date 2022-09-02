@extends('layout')

@section('title')
    {{$post['name']}}
@endsection

@section('css')
<link rel="stylesheet" href="{{url('css/show.css')}}">
@endsection

@section('content')
<div id="main" class="container-fluid">
    <div id="main2" class="py-5 text-center">
            <h1>{{$post->name}}</h1>
            <img class="img-thumbnail" src="{{url('storage/pictures/'.$post->file_path)}}">
            <p class="descript-text py-1">{{$post['description']}}</p>
            <div>
                <p class="m-auto">{{$post->created_at}}</p>
                <a href="{{ route('posts.edit', $post) }}"><button type="submit" class="btn btn-secondary my-3">Edit</button></a>
            </div>
    </div>
</div>
@endsection