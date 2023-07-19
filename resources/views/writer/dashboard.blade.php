<x-layout>
    <x-slot name="titlePage" >
        Dashboard Editor Page
    </x-slot>

    <div class="container-fluid p-5 text-dark bg-revisor">
        <div class="row justify-content-center my-5 px-5">
            <h2 class="display-4">
                Welcome back, Editor! 
            </h2>  
        </div>
    </div>

    <div class="bg-custom py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <h2>Articles under review</h2>
                    <x-writer-articles-table
                    :articles="$unrevisionedArticles" 
                    />
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <h2>Published articles</h2>
                    <x-writer-articles-table
                    :articles="$acceptedArticles" 
                    />
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <h2>Rejected articles</h2>
                    <x-writer-articles-table
                    :articles="$rejectedArticles" 
                    />
                </div>
            </div>
        </div>
    
    </div>

</x-layout>