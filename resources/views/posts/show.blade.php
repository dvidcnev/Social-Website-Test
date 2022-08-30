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
            <p>{{$post->created_at}}</p>
    </div>
</div>
@endsection