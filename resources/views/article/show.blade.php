<x-layout>
    
    <x-slot name="titlePage" >
        Show Article Page
    </x-slot>
    

    <div class="container">
        <div class="row  my-5 ">
            <img src="{{Storage::url($article->image)}}" height="550px" width="800px" alt="...">
            
        </div>
    </div>
    <div class="container">
        <div class="row my-5">
            <div class="col-12  text-center">
                <h2>{{$article->title}}</h2>
                <h4 class="card-subtitle mb-2 text-body-secondary">{{$article->subtitle}}</h4>
                <p class="small text-capitalize  fw-bold">{{$article->category->name}}</p>
                <p class="card-text">{{ $article->body }}</p>
                <p class="card-text">Created by {{$article->user->name}} at {{$article->created_at->format('d/m/Y')}}</p>
                <a href="{{route('article.index')}}" class="card-link text-dark fw-bold">Go Back <i class="fa-solid fa-arrow-right fa-sm" style="color: #000000;"></i> </a> 
            </div>
        </div>
    </div>

    @if (Auth::user() && Auth::user()->is_revisor)
        <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-dark text-white my-5">Accept the article</a> 
        <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-dark text-white my-5">Reject the article</a> 
    @endif
    
    
    
</x-layout>