<header >
    <div class="container-fluid masthead">
        <div class="row align-items-center vh-100">
            <div class="col-12 col-md-6 mx-auto " >
                <h1 class="lead fw-bold text-dark display-5">Welcome to <br> The Aulab Post</h1>
                <form class="d-flex" method="GET" action="{{route('article.search')}}">
                    <input class="form-control me-2" type="search" name="query" placeholder="Find Article" aria-label="Search">
                    <button class="btn bg-custom-dark" data-bs-theme="dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <div class="container">
                    <div class="row">
                        <div class="col-12-col-md-6">
                            <a href="#sezione-destinazione" class="freccia">
                                <span><i class="fa-solid fa-circle-arrow-down fa-bounce fa-2xl" style="color: #28292d;"></i></span>
                            </a>
                              
                              <!-- Questo è l'elemento di destinazione verso il quale la freccia punta -->
                            {{-- <div id="sezione-destinazione">
                                <!-- Contenuto della sezione destinazione -->
                            </div> --}}
                        </div>
                    </div>
                </div>
                
            </div>
           
            
        </div>
    </div>
</header>