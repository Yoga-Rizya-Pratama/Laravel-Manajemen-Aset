<nav class="navbar navbar-expand-md shadow-sm ">
    <div class="container n-container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/assets/images/Riau.png" alt="" width="50" height="50">
             <h5 class="brand mt-1"> DPUPRPKPDP PROVINSI RIAU</h5>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <h3>Hi {{ strtok(Auth::user()->name, " ") }}</h3>
                        <h5>{{ Auth::user()->role }}</h5>
                        {{-- <h5>{{ Auth::user()->sub_bidang}}</h5> --}}
                        <a class="" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                           {{-- {{ __('Logout') }} --}} Logout
                         </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
