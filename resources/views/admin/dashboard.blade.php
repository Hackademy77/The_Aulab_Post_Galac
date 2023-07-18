<x-layout>
    <x-slot name="titlePage" >
        Dashboard Admin Page
    </x-slot>

    <div class="container-fluid p-5 text-dark bg-revisor">
        <div class="row justify-content-center my-5 px-5">
            <h2 class="display-4">
                Welcome back, Administrator! 
            </h2>  
        </div>
    </div>

    <div class="bg-custom py-5">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <h2>Jop application to administration role.</h2>
                    <x-requests-table
                    :roleRequests="$adminRequests" role="administrator"
                    />
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <h2>Jop application to reviewer role.</h2>
                    <x-requests-table
                    :roleRequests="$revisorRequests" role="reviewer"
                    />
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <h2>Jop application to editor role.</h2>
                    <x-requests-table
                    :roleRequests="$writerRequests" role="editor"
                    />
                </div>
            </div>
        </div>

        

        <hr>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Platform tags</h2>
                    <x-metainfo-table 
                    :metaInfos="$tags" metaType="tags" /> 
                </div>
            </div>
        </div>
    </div>   



</x-layout>    