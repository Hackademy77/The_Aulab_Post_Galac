<x-layout>
    
    <x-slot name="titlePage" >
        Home Page
    </x-slot>
    
    <x-masthead />
   <div class="container">
        <div class="row  my-5 text-center fw-bolder">
            <h2>New Articles</h2>
        </div>
    </div>
    <div class="container">
        <div class="row  my-5">
            @foreach ($articles as $article)
            @if($loop->first) 
            <div class="col-12 ">
                <x-articles.last
                :article="$article"
                />
            </div>
            @else
            <div class="col-12 ">
                <x-articles.last
                :article="$article"
                :order="$orderFirst"
                />
            </div>
            @endif
            @endforeach
        </div>
    </div>
    
    
    
</x-layout>