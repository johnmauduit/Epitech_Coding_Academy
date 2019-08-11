<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lang.css') }}" rel="stylesheet">
    <link href="{{ asset('css/social.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
</head>
<body>
    <div id="app" class="d-flex flex-column">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    Unicorn Bet{{--  {{ config('app.name', 'Laravel') }} --}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                            {{ __('Language') }} <span class="caret"></span>
                                    </a>
                                    <ul class="nav-item dropdown-menu dropdown-menu-left languagepicker roundborders large">
                                            <a class="dropdown-item" href="{{ route('lang', ['lang' => 'en']) }}"><li><img src="{{ asset('img/flag/GB.png') }}"/>{{ __('English') }}</li></a>
                                            <a class="dropdown-item" href="{{ route('lang', ['lang' => 'fr']) }}"><li><img src="{{ asset('img/flag/FR.png') }}"/>{{ __('French') }}</li></a>
                                            <a class="dropdown-item" href="{{ route('lang', ['lang' => 'es']) }}"><li><img src="{{ asset('img/flag/ES.png') }}"/>{{ __('Spanish') }}</li></a>
                                            <a class="dropdown-item" href="{{ route('lang', ['lang' => 'ja']) }}"><li><img src="{{ asset('img/flag/JP.png') }}"/>{{ __('Japanese') }}</li></a>
                                        </ul>
                                    {{-- <ul class="nav-item dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="{{ route('lang', ['lang' => 'en']) }}">English</a></li>
                                            <li><a class="dropdown-item" href="{{ route('lang', ['lang' => 'fr']) }}">Français</a></li>
                                    </ul> --}}
                            </li>
                        @auth
                        
                        @if (Auth::user()->admin == 1)
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                        {{ __('Admin panel') }}<span class="caret"></span>
                                </a>
                        
                                <ul class="nav-item dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('admin_user_index') }}">@lang{{ __('Users') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin_player_index') }}">{{ __('Players') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin_team_index') }}">{{ __('Teams') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin_match_index') }}">{{ __('Matchs') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin_stat_index') }}">{{ __('Stats') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin_bet_index') }}">{{ __('Bets') }}</a></li>
                                </ul>
                        </li>
                        
                                @endif
                                @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    {{-- <div class="dropdown"> --}}
                        <ul class="navbar-nav ml-auto">
                            {{-- <ul class="nav-item dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown"> --}}
                                {{-- <li class="nav-item dropdown"><a class="nav-link" href="{{ route('lang', ['lang' => 'en']) }}">English</a></li>
                                <li class="nav-item dropdown"><a class="nav-link" href="{{ route('lang', ['lang' => 'fr']) }}">Français</a></li> --}}
                                {{-- </ul> --}}
                            {{-- </div> --}}
                            
                            
                            
                            <!-- Authentication Links -->
                            @if (Auth::check())
                            
                                
                                        
                                            <li class="nav-item"><a class="nav-link" href="{{ '/users/user/'. Auth::user()->id }}">{{ __('Profile') }}</a>
                                            <li class="nav-item"><a class="nav-link" href="{{ '/bets/user/'. Auth::user()->id }}">{{ __('My bets') }}</a>

                                                {{-- <a class="dropdown-item" href="{{ route('show_players') }}">Players</a> --}}
                                            <li class="nav-item"><a class="nav-link" href="{{ route('teams') }}">{{ __('Teams') }}</a></li>
                                                {{-- <a class="dropdown-item" href="{{ route('match_index') }}">Matchs</a>
                                                <a class="dropdown-item" href="{{ route('user_index') }}">Stats</a>
                                                <a class="dropdown-item" href="{{ route('user_index') }}">Bets</a> --}}
                                      
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                           
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            
                        @endif   
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="flex-fill py-4">
            @yield('content')
        </main>
    

    </div>



    <footer class="footer font-small bg-white pt-4">

            <!-- Footer Elements -->
            <div class="container">
            

            <div class="footer-copyright bg-white text-center py-3" style="font-size: 20px;">
                {!! Html::image('img/licdab.jpg', 'img', array('width' => '70px', 'height' => '70px')) !!}
                © 2018 Copyright: <a href=""> Unicorn Bet</a>
            </div>
        
        
          </footer>
          <!-- Footer -->





    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript" src="{{ asset('js/pieChart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/lineChart.js') }}"></script>
</body>
</html>
