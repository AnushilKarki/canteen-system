<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
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
                    <a class="navbar-brand" href="{{ url('/user') }}">
                        {{ config('app.name', 'Online Canteen') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li> 
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                    <li>
                                        <a href="{{ route('viewprofile') }}">
                                            Profile

                                        </a>

                                       
                                    </li>
                                    
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <footer id="myFooter">
       <div class="container">
           <div class="row">
               <div class="col-sm-3">
                   <h2 class="logo"><a href="#"> LOGO </a></h2>
               </div>
               <div class="col-sm-2">
                   <h5>Get started</h5>
                   <ul>
                       <li><a href="#">Home</a></li>
                       <li><a href="#">Sign up</a></li>
                       <li><a href="#">Log In</a></li>
                   </ul>
               </div>
               <div class="col-sm-2">
                   <h5>About us</h5>
                   <ul>
                       <li><a href="#">Canteen Information</a></li>
                       <li><a href="#">Contact us</a></li>
                       <li><a href="#">Reviews</a></li>
                   </ul>
               </div>
               <div class="col-sm-2">
                   <h5>Support</h5>
                   <ul>
                       <li><a href="#">FAQ</a></li>
                       <li><a href="#">Help desk</a></li>
                       <li><a href="#">Forums</a></li>
                   </ul>
               </div>
               
           </div>
       </div>
       <div class="footer-copyright">
           <p style="text-align: center">© 2019 Project Bibek Anees Anushil and Laxman</p>
       </div>
   </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
