<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posty</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-200">
    <nav class="p-4 bg-white flex justify-between mb-4">
        <ul class="flex item-center">
            <li>
            <a href="{{route('home')}}" class="p-3">Home</a>
            </li>
            <li>
            <a href="{{route('dashboard')}}" class="p-3">Dashboard</a>
            </li>
            <li>
            <a href="/posts" class="p-3">Posts</a>
            </li>
        </ul>
        <ul class="flex item-center">
            @auth
            <li>
            <a href="" class="p-3">{{auth()->user()->name}}</a>
            </li>

            <li>
                <form action="{{ route('logout')}}" method="post" class="inline p-3">
                    @csrf
                    <button>logout</button>
                </form>
            </li>
            @endauth
            @guest
            <li>
            <a href="{{ route('login') }}" class="p-3">login</a>
            </li>
            <li>
            <a class="p-3" href="{{ route('register') }}" class="p-3">Register</a>
            </li>
            @endguest

        </ul>
    </nav>
    @yield('content')
</body>
</html>
