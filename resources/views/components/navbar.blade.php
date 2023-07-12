<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid ">
        <a class="navbar-brand fw-semibold fst-italic" href="{{ route('home') }}">
        <img src="{{asset('img/logo5.png')}}" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link  @if(Route::currentRouteName() == 'home') active @endif" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  @if(Route::currentRouteName() == 'article.index') active @endif" aria-current="page" href="{{ route('article.index') }}">Articles</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link  @if(Route::currentRouteName() == 'article.create') active @endif" aria-current="page" href="{{ route('article.create') }}">Add <i class="fa-solid fa-plus fa-beat fa-lg" style="color: #616161"></i></a>
                    </li>
                @endauth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Sport</a></li>
                        <li><a class="dropdown-item" href="#">Politics</a></li>
                        <li><a class="dropdown-item" href="#">Economy</a></li>
                        <li><a class="dropdown-item" href="#">News</a></li>
                        <li><a class="dropdown-item" href="#">Entertaiment</a></li>
                        <li><a class="dropdown-item" href="#">Nature</a></li>
                        
                    </ul>
                </li>

                @auth
                    <li class="nav-item">
                        <a class="nav-link  @if(Route::currentRouteName() == 'careers') active @endif" aria-current="page" href="{{ route('careers') }}">Work with us</a>
                    </li>
                @endauth

                <ul class="navbar-nav mb-2 mb-lg-0 text-center">
                    @auth
                        <li class="nav-item">
                            <span class="nav-link">Ciao, {{ Auth::user()->name }} <i class="fa-solid fa-user fa-lg" style="color: #616161;"></i></span>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="post">
                            @csrf
                                <button type="submit" class="btn ">
                                    <i class="fa-solid fa-right-to-bracket fa-xl" style="color: #616161"></i>
                                </button>   
                            </form>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item">
                            <a class="nav-link @if(Route::currentRouteName() == 'register') active @endif" aria-current="page"
                                href="{{ route('register') }}">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::currentRouteName() == 'login') active @endif" aria-current="page"
                                href="{{ route('login') }}">Login <i class="fa-solid fa-door-open fa-lg" style="color: #616161"></i></a>
                        </li>
                    @endguest
                </ul>
                
            </ul>
           {{--  <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form> --}}
            
        </div>
    </div>
</nav>