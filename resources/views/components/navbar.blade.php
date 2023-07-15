<nav class="navbar navbar-expand-lg bg-custom-dark" data-bs-theme="dark">
    <div class="container-fluid ">
        <a class="navbar-brand fw-semibold fst-italic" href="{{ route('home') }}">
        <img src="{{asset('img/logo-nav.png')}}" class="logo">
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
                        <a class="nav-link  @if(Route::currentRouteName() == 'article.create') active @endif" aria-current="page" href="{{ route('article.create') }}">Write Article</a>
                    </li>
                @endauth

                {{-- <li class="nav-item">
                    <div class="dropdown">
                      <button class="btn color-custom fs-6 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                      </button>
                      <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                        <li ><a class="dropdown-item" href="{{route('category.show', compact('category'))}}">{{$category->name}}</a></li>
                        @endforeach
                      </ul> 
                    </div>  
                  </li>   --}}

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>

                    <ul class="dropdown-menu">
                    
                        @foreach ($categories as $category)
                        <li ><a class="dropdown-item" href="{{route('article.byCategory', compact('category'))}}">{{$category->name}}</a></li>
                        @endforeach
                        
                    </ul>
                </li>



                @auth
                    <li class="nav-item">
                        <a class="nav-link  @if(Route::currentRouteName() == 'careers') active @endif" aria-current="page" href="{{ route('careers') }}">Work with us</a>
                    </li>
                @endauth

                @auth
                    @if(Auth::user()->is_admin)
                        <li class="nav-item"> 
                            <a href="{{route('admin.dashboard')}}" class="dropdown-item nav-link  @if(Route::currentRouteName() == 'admin.dashboard') active @endif" aria-current="page">Dashboard Admin</a>
                        </li>
                    @endif
                @endauth    

                @auth
                    @if(Auth::user()->is_revisor)
                        <li class="nav-item"> 
                            <a href="{{route('revisor.dashboard')}}" class="dropdown-item nav-link  @if(Route::currentRouteName() == 'revisor.dashboard') active @endif" aria-current="page">Dashboard Reviewer</a>
                        </li>
                    @endif
                @endauth  

                @auth
                    <li class="nav-item">
                        <span class="nav-link">Hi, {{ Auth::user()->name }}</span>
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
                            href="{{ route('login') }}">Login </a>
                    </li>
                @endguest
                
                
            </ul>
           {{--  <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form> --}}
            
        </div>
    </div>
</nav>