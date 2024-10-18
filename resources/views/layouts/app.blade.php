<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{-- Uncomment the line below if you have a favicon --}}
    {{-- <link rel="icon" href="{{ asset('favicon.ico') }}"> --}}

	    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
		<!-- This will include additional styles from individual pages -->
    @yield('styles')
</head>
</head>
<body>
    <header>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}" class="nav-button">Home</a></li>
            <li><a href="{{ route('about') }}" class="nav-button">About</a></li>
            <li><a href="{{ route('services') }}" class="nav-button">Services</a></li>
            <li><a href="{{ route('declutter') }}" class="nav-button">Declutter</a></li>
            <li><a href="{{ route('resources') }}" class="nav-button">Resources</a></li>
            <li><a href="{{ route('lifestyle') }}" class="nav-button">Lifestyle</a></li>
            <li><a href="{{ route('foreward') }}" class="nav-button">Foreward</a></li>
            <li><a href="{{ route('contact') }}" class="nav-button">Contact</a></li>
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </nav>
	</header>
    <main>
        @yield('content')
    </main>

    <footer>
        <p></p>
        <p><a href="{{ route('home') }}" class="nav-button">Home</a></p>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
