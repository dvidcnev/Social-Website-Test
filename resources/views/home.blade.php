@extends('layout')

@section('title')
    Home
@endsection

@section('css')
<link rel="stylesheet" href="{{url('css/home.css')}}">
@endsection

@section('content')

    <div id="main" class="container-fluid">
        @foreach ($posts as $post)
            <div class="py-5 text-center">
                {{-- <a href="/{{$post->id}}"> --}}
                    <a href="{{ route('posts.show', ['post' => $post['id']]) }}">
                    <h2 class="py-2">{{$post->name}}</h2>
                    <img id="picture" class="img-thumbnail" src="{{url('storage/pictures/'.$post->file_path)}}">
                    <p class="descript-text py-2 m-auto w-75 text-center">{{$post['description']}}</p>
                    {{-- <p>{{$post->created_at}}</p> --}}
                </a>
            </div>
        @endforeach
        <div class="container mx-auto d-flex w-100" id="pagination">{{$posts->links()}}</div>
    </div>

@endsection