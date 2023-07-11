<div class="card" style="width: 18rem;">

    <img src="{{Storage::url($article->image)}}" class="card-img-top " height="350px" alt="...">

    <div class="card-body">

        <a href="{{route('article.byCategory',['category'=>$article->category->id])}}" class="small text-capitalize  fw-bold" >{{$article->category->name}}</a>

        <h5 class="card-title">{{$article->title}}</h5>

        <h6 class="card-subtitle mb-2 text-body-secondary">{{$article->subtitle}}</h6>
        <p class="card-text">{{ Str::limit($article->body, 15) }}</p>

        <p class="card-text"> <a href="{{route('article.byWriter',['user'=>$article->user->id])}}">Created by {{$article->user->name}}</a> at {{$article->created_at->format('d/m/Y')}}</p>
        
        <a href="{{route('article.show',compact('article'))}}" class="card-link text-dark fw-bold">Read Full -> </a>
        
    </div>
</div>
    
    
    
    
    