<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="/css/app.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <header>
            <nav>
                <a href="/">List of Mid</a>
                {{-- <a href="/pages/about">About Us</a> --}}
                @guest    
                <a href="/pages/login">Login</a>
                <a href="/pages/register">Register</a>
                    
                @else
                <a href="/admin">{{$user->name}}</a>
                <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    @endguest
                                    
            </nav>
        </header>
        <center>
        
        @section('sidebar')
            This is the master sidebar.
        @show
    </center>
        <div class="container">
            @yield('content')
        </div>

    </body>
</html>