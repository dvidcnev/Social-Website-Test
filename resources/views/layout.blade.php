<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ url('css/layout.css') }}">

    @yield('css')

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    
    <nav id="navbar" class="navbar py-3">
        <ul class="d-flex">
            <li><a href="{{ route('home.index') }}" class="nav-item nav-link">Home</a></li>
            <li><a href="{{ route('home.about') }}" class="nav-item nav-link">About</a></li> 
            <li><a href="{{ route('posts.create') }}" class="nav-item nav-link">Create</a></li>
        </ul>
        <ul class="d-flex px-5">
            <li><a href="" class="nav-item nav-link">Register</a></li>
            <li><a href="" class="nav-item nav-link">Login</a></li>
        </ul>
    </nav>

    <main>
    @yield('content')
    </main>

</body>
@yield('javascript')
</html>