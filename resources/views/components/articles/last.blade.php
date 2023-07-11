<div class="container-fluid">
    <div class="row">

        <div class="col-12 col-md-6 px-0">
            <img src="{{Storage::url($article->image)}}" height="350px" width="100%" alt="...">
        </div>

        <div class="col-12 col-md-6 p-5 bg-custom {{$order ?? null}} ">

            <a href="{{route('article.byCategory',['category'=>$article->category->id])}}" class="small text-capitalize  fw-bold text-dark" >{{$article->category->name}}</a>

            <h2 class="card-title">{{$article->title}}</h2>

            <h4 class="card-subtitle mb-2 text-body-secondary">{{$article->subtitle}}</h4>
            <p>{{ Str::limit($article->body, 60) }}</p>

            <p class="card-text">Written by <a href="{{route('article.byWriter',['user'=>$article->user->id])}}" class="text-dark fw-bold"> {{$article->user->name}} </a> at {{$article->created_at->format('d/m/Y')}}</p>
            
            <a href="{{route('article.show',compact('article'))}}" class="card-link text-dark fw-bold text-decoration-none text-end">Read Full <i class="fa-solid fa-arrow-right fa-sm" style="color: #000000;"></i> </a>
        </div>
    </div>
</div>



