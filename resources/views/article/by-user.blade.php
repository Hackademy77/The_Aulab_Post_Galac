<x-layout>
    
    <x-slot name="titlePage" >
       Articles by Writer page 
    </x-slot>
    
    <x-masthead />
   <div class="container">
        <div class="row  my-5">
            <h2>Written by:{{$user->name}}</h2>
        </div>
    </div>
    <div class="container">
        <div class="row  my-5">
            @foreach ($articles as $article)
            <div class="col-12 col-md-4">
                <x-articles.card
                :article="$article"
                />
            </div>
            @endforeach
        </div>
    </div>
    
    
    
</x-layout>