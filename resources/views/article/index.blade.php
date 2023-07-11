<x-layout>
    
    <x-slot name="titlePage">
       Articles Page
    </x-slot>
    <div class="bg-custom">
        <div class="container">
            <div class="row py-5 text-center">
                <h2>All Articles</h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
            <div class="row justify-content-between  m-5">
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