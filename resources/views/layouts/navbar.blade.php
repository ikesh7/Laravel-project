<nav class="navbar navbar-expand-lg navbar-dark nav_bar">
    <a class="navbar-brand font-weight-bold" href="/" style="font-size:1.5em; margin-left:0.3em;">Peakhotels.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mt-1 ml-auto">
            @auth <li class="nav-item active">
                <a class="nav-link font-weight-bold" style="font-size:16px; opacity:50%; margin-right:0.1em;"
                    href="{{ url('/login') }}">Dasboard <span class="sr-only">(current)</span></a>
            </li> @endauth
            <li class="nav-item ">
                <a class="nav-link font-weight-bold" style="font-size:16px;" href="{{ url('login') }}">List your
                    property</a>
            </li>
            @guest<li class="nav-item  ">
                <a class="nav-link font-weight-bold" style="font-size:16px;" href="{{ route('login') }}"> Sign In
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link font-weight-bold" style="font-size:16px" href="{{ route('register') }}">Register </a>
            </li>
            @endguest

            @auth
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ auth()->user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown_size" style="min-width:1rem;"
                    aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item text-primary" href="{{ url('profile') }}">{{ __(' My profile') }} </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                            {{ __('Log out') }}
                    </form>
                    </a>
                </div>
            </li>
            @endauth
        </ul>

    </div>
</nav>
