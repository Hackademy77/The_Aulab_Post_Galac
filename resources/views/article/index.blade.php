<x-layout>
    
    <x-slot name="titlePage">
       Articles Page
    </x-slot>
    <div class="bg-custom">
        <div class="container">
            <div class="row py-5 text-center">
                <h2 class="display-4">All Articles</h2>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="container px-5 d-flex justify-content-evenly">
            <div class="row justify-content-evenly">
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

        {{-- <div class="container d-flex justify-content-center ">
            <div class="row">
                <div class="col-12 text-dark">
                    {{$articles->links()}}
                </div>
            </div>
        </div> --}}
    </div>

</x-layout>