<x-layout>
    
    <x-slot name="titlePage" >
        Show Article Page
    </x-slot>
    

    <div class="container-fluid mt-0 px-0">
        <div class="row row-show-custom" >
            <img src="{{Storage::url($article->image)}}" class="img-show-background" alt="article image">
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-md-8">
                <h2>{{$article->title}}</h2>
                <h4 class="card-subtitle mb-2 text-body-secondary">{{$article->subtitle}}</h4>

                <p class="text-muted small fst-italic">Reading time {{$article->readDuration()}} min</p>
                

                @if ($article -> category)
                    <p class="small text-capitalize mb-1 fw-bold"><a href="{{route('article.byCategory',['category'=>$article->category->id])}}" class=" text-dark">{{$article->category->name}}</a></p>
                @else
                    <p class="small  text-capitalize text-muted"> Uncategorized</p>
                @endif 

                <p class="small fst-italic text-capitalize mt-0 pt-0">
                    @foreach($article->tags as $tag)
                        #{{$tag->name}}
                    @endforeach
                </p>

                
                <p class="card-text">{{ $article->body }}</p>
                <p class="card-text small">By <a href="{{route('article.byWriter',['user'=>$article->user->id])}}" class=" text-dark">{{$article->user->name}}</a>  - {{$article->created_at->format('d/m/Y')}}</p>
                 
                <a href="{{route('article.index')}}" class="btn show_button read">Go Back</a>
            </div>
        </div>
        @if (Auth::user() && Auth::user()->is_revisor)
            <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-dark text-white my-5">Accept the article</a> 
            <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-dark text-white my-5">Reject the article</a> 
        @endif
    </div>

    
    
    
    
</x-layout>