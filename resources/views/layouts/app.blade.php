<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Diaries</title>
    
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>

</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="">
                    Store Diaries
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}" class="p-3">Home</a></li>
                    @auth
                    <li><a href="{{ route('dashboard') }}" class="p-3">Dashboard</a></li>
                    @endauth
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @auth
                        <li><a href="#" class="p-3">{{auth()->user()->name}}</a></li>
                        <li><a href="{{ route('logout') }}" class="p-3">Logout</a></li>
                    @endauth

                    @guest
                        <li><a href="{{ route('login')}}" class="p-3">Login</a></li>
                        <li><a href="{{ route('register')}}" class="p-3">Register</a></li>
                    @endguest
                </ul>
                
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-6 px-6">
        @yield('content')
    </div>
            
    
</body>
</html>