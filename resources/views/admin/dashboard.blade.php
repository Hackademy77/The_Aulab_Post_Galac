<x-layout>
    <div class="container-fluid p-5 bg-custom text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Welcome back, Administrator! 
            </h1>    
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Jop application to administration role.</h2>
                <x-requests-table
                :roleRequests="$adminRequests" role="administrator"
                />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Jop application to reviewer role.</h2>
                <x-requests-table
                :roleRequests="$revisorRequests" role="reviewer"
                />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Jop application to editor role.</h2>
                <x-requests-table
                :roleRequests="$writerRequests" role="editor"
                />
            </div>
        </div>
    </div>























</x-layout>    