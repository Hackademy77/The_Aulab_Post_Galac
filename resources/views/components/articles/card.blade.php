<div class="card" style="width: 20rem;">

    <img src="{{Storage::url($article->image)}}" class="card-img-top " height="250px" alt="...">

    <div class="card-body py-3">

    <a href="{{route('article.byCategory',['category'=>$article->category->id])}}" class="small text-capitalize  fw-bold text-dark" >{{$article->category->name}}</a>

        <h5 class="card-title">{{ Str::limit($article->title, 25) }}</h5>

        <h6 class="card-subtitle mb-2 text-body-secondary">{{ Str::limit($article->subtitle, 25) }}</h6>

        <p class="card-text">Written by <a href="{{route('article.byWriter',['user'=>$article->user->id])}}" class="text-dark fw-bold"> {{$article->user->name}} </a> at {{$article->created_at->format('d/m/Y')}}</p>
        
        <a href="{{route('article.show',compact('article'))}}" class="card-link text-dark fw-bold">Read Full -> </a>
        
    </div>
</div>
    
    
    
    
    