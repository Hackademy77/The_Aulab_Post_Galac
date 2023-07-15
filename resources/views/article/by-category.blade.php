<x-layout>
    
    <x-slot name="titlePage" >
       Articles by category page 
    </x-slot>
    
   <div class="bg-custom">
        <div class="container">
            <div class="row pt-5">
                <h2>Category: <span class="text-secondary text-uppercase">{{$category->name}}</span></h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row ">
                    @foreach ($articles as $article)
                    <div class="col-12 col-md-4 py-5">
                        <x-articles.card
                        :article="$article"
                        />
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
    </div> 
  
</x-layout>