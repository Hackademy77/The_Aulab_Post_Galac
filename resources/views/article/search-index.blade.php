<x-layout>
    
    <x-slot name="titlePage" >
       Articles by query page 
    </x-slot>
    
   <div class="bg-custom">
        <div class="container search-height">
            <div class="row pt-5">
                <h2>You are looking for: <span class="text-secondary text-uppercase">{{$query}}</span></h2>
            </div>
            <div class="row justify-content-evenly">
                @forelse ($articles as $article)
                <div class="col-12 col-md-4 d-flex justify-content-center py-5">
                    <x-articles.card
                    :article="$article"
                    />
                </div>
                @empty 
                    <div class="col-12">
                        <p>We are sorry, but nothing matches your search terms. Please try again with other different keywords!</p>
                        <div class="row">
                            <div class="col-12 col-md-5">
                                <form class="d-flex" method="GET" action="{{route('article.search')}}">
                                    <input class="form-control me-2" type="search" name="query" placeholder="Find Article" aria-label="Search">
                                    <button class="btn bg-custom-dark btn-custom-grey" data-bs-theme="dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </div>
                        

                    </div>

                @endforelse
            </div>

        </div>
       
        
    </div> 
  
</x-layout>