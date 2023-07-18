<x-layout>
    
    <x-slot name="titlePage" >
       Articles by query page 
    </x-slot>
    
   <div class="bg-custom">
        <div class="container">
            <div class="row pt-5">
                <h2>You've search: <span class="text-secondary text-uppercase">{{$query}}</span></h2>
            </div>
            <div class="row justify-content-evenly">
                @foreach ($articles as $article)
                <div class="col-12 col-md-4 d-flex justify-content-center py-5">
                    <x-articles.card
                    :article="$article"
                    />
                </div>
                @endforeach
            </div>

        </div>
       
        
    </div> 
  
</x-layout>