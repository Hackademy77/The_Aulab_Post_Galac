
<div class="container-fluid">
    <div class="row row-last-custom" id="sezione-destinazione">
        
        <div class="col-12 col-md-6 px-0">
            <img src="{{Storage::url($article->image)}}" height="400px" width="100%" alt="...">
        </div>

        <div class="col-12 col-md-6 p-5 bg-custom {{$order ?? null}} d-flex flex-column justify-content-center">

            @if ($article -> category)

                <a href="{{route('article.byCategory',['category'=>$article->category->id])}}" class="small text-capitalize  fw-bold text-dark" >{{$article->category->name}}</a>
            @else

                <p class="small text-muted fst-italic text-capitalize"> Uncategorized</p>

            @endif 

            <h2 class="card-title">{{Str::limit($article->title,20)}}</h2>

            <h4 class="card-subtitle mb-2 text-body-secondary">{{Str::limit($article->subtitle,30)}}</h4>

            <p class="small fst-italic text-capitalize">
                @foreach($article->tags as $tag)
                    #{{$tag->name}}
                @endforeach
            </p>

            <p class="mb-2">{{ Str::limit($article->body, 50) }}</p>

            <p class="card-text mb-1">Written by <a href="{{route('article.byWriter',['user'=>$article->user->id])}}" class="text-dark fw-bold">{{$article->user->name}}</a> at {{$article->created_at->format('d/m/Y')}}</p>

            <p class="text-muted small fst-italic mb-2">Reading time {{$article->readDuration()}} min</p>
            
            <a href="{{route('article.show',compact('article'))}}" class="card-link text-dark fw-bold text-decoration-none text-end">Read Full <i class="fa-solid fa-arrow-right fa-sm" style="color: #000000;"></i> </a>
        </div>
        
    </div>
</div>





