<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Twittor') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('svg/logo.svg') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div id="app">


        <div class="sidebar-left position-fixed h-100 px-5 py-3" style="width: 30vw;">

            <div style="max-width: 255px; margin-left: auto;">
                <a href="/home" class="my-auto">
                    <img src="{{ asset('svg/logo.svg') }}" alt="Twittor Logo" style="height: 45px !important; padding: .3em;" class="mb-3 button-nav">
                </a>
                <ul class="navbar-nav ml-auto">

                    <li class="mb-2 d-flex">
                        <a class="button-nav d-flex" href="/">
                            <svg height='27px' width='27px' version="1.1" x="0px" y="0px" viewBox="0 0 24 24">
                                <g>
                                    <path class="nav-icon" d="M22.46 7.57L12.357 2.115c-.223-.12-.49-.12-.713 0L1.543 7.57c-.364.197-.5.652-.303 1.017.135.25.394.393.66.393.12 0 .243-.03.356-.09l.815-.44L4.7 19.963c.214 1.215 1.308 2.062 2.658 2.062h9.282c1.352 0 2.445-.848 2.663-2.087l1.626-11.49.818.442c.364.193.82.06 1.017-.304.196-.363.06-.818-.304-1.016zm-4.638 12.133c-.107.606-.703.822-1.18.822H7.36c-.48 0-1.075-.216-1.178-.798L4.48 7.69 12 3.628l7.522 4.06-1.7 12.015z"></path>
                                    <path class="nav-icon" d="M8.22 12.184c0 2.084 1.695 3.78 3.78 3.78s3.78-1.696 3.78-3.78-1.695-3.78-3.78-3.78-3.78 1.696-3.78 3.78zm6.06 0c0 1.258-1.022 2.28-2.28 2.28s-2.28-1.022-2.28-2.28 1.022-2.28 2.28-2.28 2.28 1.022 2.28 2.28z"></path>
                                </g>
                            </svg>
                            <p class="my-auto pl-2">{{ __('Home') }}</p>
                        </a>
                    </li>




                    <!-- Authentication Links -->
                    @guest
                        <div class="position-absolute" style="bottom: 1rem;">
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        </div>
                    @else

                        <li class="mb-2 d-flex">
                            <a class="button-nav d-flex @if(Route::current()->getName() === "profile.show") active @endif" href="/profile/{{ Auth::user()->id }}">
                                <svg height='27px' width='27px' version="1.1" x="0px" y="0px" viewBox="0 0 24 24">
                                    <g>
                                        <path class="nav-icon" d="M12 11.816c1.355 0 2.872-.15 3.84-1.256.814-.93 1.078-2.368.806-4.392-.38-2.825-2.117-4.512-4.646-4.512S7.734 3.343 7.354 6.17c-.272 2.022-.008 3.46.806 4.39.968 1.107 2.485 1.256 3.84 1.256zM8.84 6.368c.162-1.2.787-3.212 3.16-3.212s2.998 2.013 3.16 3.212c.207 1.55.057 2.627-.45 3.205-.455.52-1.266.743-2.71.743s-2.255-.223-2.71-.743c-.507-.578-.657-1.656-.45-3.205zm11.44 12.868c-.877-3.526-4.282-5.99-8.28-5.99s-7.403 2.464-8.28 5.99c-.172.692-.028 1.4.395 1.94.408.52 1.04.82 1.733.82h12.304c.693 0 1.325-.3 1.733-.82.424-.54.567-1.247.394-1.94zm-1.576 1.016c-.126.16-.316.246-.552.246H5.848c-.235 0-.426-.085-.552-.246-.137-.174-.18-.412-.12-.654.71-2.855 3.517-4.85 6.824-4.85s6.114 1.994 6.824 4.85c.06.242.017.48-.12.654z"></path>
                                    </g>
                                </svg>
                                <p class="my-auto pl-2">{{ __('Profile') }}</p>
                            </a>
                        </li>

                        <li class="nav-item dropdown position-absolute" style="bottom: 1rem;">
                            <a id="navbarDropdown" class="nav-link d-flex p-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <div class="d-flex button-nav" style="width: 255px;">
                                    <img src="https://pbs.twimg.com/profile_images/1347983866179559431/5q3Y4QhU_400x400.jpg" style="height: 39px; width: 39px;" class="rounded-circle mr-2" alt="Profile Picture">
                                    <div>
                                        <p style="font-size: 15px; color: black;" class="font-weight-bold m-0">{{ Auth::user()->name }}</p>
                                        <p style="margin-top: -7px !important; font-size: 15px;" class="text-muted m-0 font-weight-lighter"><?php echo('@')?>{{ Auth::user()->username }}</p>
                                    </div>
                                    <img class="my-auto ml-auto" src="{{ asset('svg/options.svg') }}" alt="Home icon" height="18px">
                                </div>
                                <div class="dropdown-menu dropdown-menu-left mb-2" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Log out of <?php echo('@')?>{{ Auth::user()->username }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>

        <main style="width: 40vw; margin: 0 auto">
            @yield('content')
        </main>

        <div class="sidebar-right" style="width: 30vw">

        </div>

    </div>

</body>
</html>
