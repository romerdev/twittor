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

            <div style="max-width: 255px; margin-left: auto">
                <a href="/home">
                    <img src="{{ asset('svg/logo.svg') }}" alt="Twittor Logo" height="30px" class="mb-4">
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

                    <li class="mb-2 d-flex">
                        <a class="button-nav d-flex @if(Route::current()->getName() === "profile.show") active @endif" href="/profile/{{ Auth::user()->id }}">
                            <svg height='27px' width='27px' version="1.1" x="0px" y="0px" viewBox="0 0 24 24">
                                <g>
                                    <path class="nav-icon" d="M12.225 12.165c-1.356 0-2.872-.15-3.84-1.256-.814-.93-1.077-2.368-.805-4.392.38-2.826 2.116-4.513 4.646-4.513s4.267 1.687 4.646 4.513c.272 2.024.008 3.46-.806 4.392-.97 1.106-2.485 1.255-3.84 1.255zm5.849 9.85H6.376c-.663 0-1.25-.28-1.65-.786-.422-.534-.576-1.27-.41-1.968.834-3.53 4.086-5.997 7.908-5.997s7.074 2.466 7.91 5.997c.164.698.01 1.434-.412 1.967-.4.505-.985.785-1.648.785z"></path>
                                </g>
                            </svg>
                            <p class="my-auto pl-2">{{ __('Profile') }}</p>
                        </a>
                    </li>


                    <!-- Authentication Links -->
                    @guest
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
                    @else
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
