<x-layout>
    <div class="container-fluid p-5 bg-custom text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Welcome back, Reviewer! 
            </h1>    
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articles to review</h2>
                <x-articles-table
                :articles="$unrevisionedArticles" 
                />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Published articles</h2>
                <x-articles-table
                :articles="$acceptedArticles" 
                />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Rejected articles</h2>
                <x-articles-table
                :articles="$rejectedArticles" 
                />
            </div>
        </div>
    </div>


</x-layout>    