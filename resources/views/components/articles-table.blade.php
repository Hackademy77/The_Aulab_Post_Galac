<div class="table-responsive">
    <table class="table align-middle table-striped table-hover border">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Subitle</th>
                <th scope="col">Reviewer</th>
                <th scope="col">Actions</th>
    
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article )
            <tr>
                <th scope="row">{{$article->id}}</th>
                
                <td>{{Str::limit($article->title,18)}}</td>
                <td>{{Str::limit($article->subtitle,30)}}</td>
                <td>{{$article->user->name}}</td>
    
                <td>
                    @if(is_null($article->is_accepted))
                        <a href="{{route('article.show', compact('article'))}}" class="btn border-0 btn-dark btn-custom-white btn-custom-grey">Read the article</a>
                    @else
                        <a href="{{route('revisor.undoArticle', compact('article'))}}" class="btn border-0 btn-dark btn-custom-white btn-custom-grey">Send in review</a>    
                    @endif
                </td>    
            </tr>
    
            @endforeach
        </tbody>
    </table>  
</div>
