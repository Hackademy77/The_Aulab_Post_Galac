<div class="card mx-4">
    <img class="card__background" src="{{Storage::url($article->image)}}" alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
    {{-- width="1920" height="2193"  --}}
      

    />
      <div class="card__content | flow">
      <div class="card__content--container | flow ">
            @if ($article -> category)
                <a href="{{route('article.byCategory',['category'=>$article->category->id])}}" class="small a-card">{{$article->category->name}}</a>
            @else
                <p class="small fst-italic text-capitalize a-card mb-0"> Uncategorized</p>
            @endif 
            <h2 class="h2-title card__title mt-1 ">{{Str::limit($article->title,18)}}</h2>
            <p class="p-custom card__description">{{ Str::limit($article->subtitle, 30) }}</p>
            <p class="p-custom small mt-1"><a href="{{route('article.byWriter',['user'=>$article->user->id])}}" class="a-card">{{$article->user->name}}</a> - {{$article->created_at->format('d/m/Y')}}</p> 

            <p class="small fst-italic text-capitalize tag-custom mt-0 mb-1">
                @foreach($article->tags as $tag)
                    #{{$tag->name}}
                @endforeach
            </p>

            <p class="text-white small fst-italic my-1">Reading time {{$article->readDuration()}} min</p>


      </div>
      <a href="{{route('article.show',compact('article'))}}" class="btn card__button read mt-0">Read more</a>
    </div>
</div>



{{-- <div class="card" style="width: 20rem;">

    <img src="{{Storage::url($article->image)}}" class="card-img-top " height="250px" alt="...">

    <div class="card-body py-3">

    <a href="{{route('article.byCategory',['category'=>$article->category->id])}}" class="small text-capitalize  fw-bold text-dark" >{{$article->category->name}}</a>

        <h5 class="card-title">{{ Str::limit($article->title, 25) }}</h5>

        <h6 class="card-subtitle mb-2 text-body-secondary">{{ Str::limit($article->subtitle, 25) }}</h6>

        <p class="card-text">Written by <a href="{{route('article.byWriter',['user'=>$article->user->id])}}" class="text-dark fw-bold"> {{$article->user->name}} </a> at {{$article->created_at->format('d/m/Y')}}</p>
        
        <a href="{{route('article.show',compact('article'))}}" class="card-link text-dark fw-bold">Read Full <i class="fa-solid fa-arrow-right fa-sm" style="color: #000000;"></i> </a>
        
    </div>
</div>  --}}
    
    
    
    
    