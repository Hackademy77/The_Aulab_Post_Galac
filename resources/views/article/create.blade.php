<x-layout>
    <x-slot name="titlePage" >
        Create Article Page
    </x-slot>

    <x-masthead />

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Inserisci un articolo </h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col-6">
                <x-articles.createform 
                :categories="$categories"
                />
            </div>
        </div>
    </div>


</x-layout>