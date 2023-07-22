<div class="table-responsive">
    <table class="table align-middle table-striped table-hover border">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Subitle</th>
                <th scope="col">Category</th>
                <th scope="col">Tags</th>
                <th scope="col">Created at</th>
                <th scope="col">Actions</th>
    
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article )
            <tr>
                <th scope="row">{{$article->id}}</th>
                
                <td>{{$article->title}}</td>
                <td>{{$article->subtitle}}</td>
                <td>{{$article->category->name ?? 'Uncategorized'}}</td>
                <td>
                    @foreach ($article->tags as $tag)
                        {{$tag->name}},
                    @endforeach
                </td>
                <td>
                    {{$article->created_at->format('d/m/Y')}}
                </td>
                <td>
                    <a href="{{route('article.show', compact('article'))}}" class="btn border-0 btn-dark btn-writer-custom btn-custom-grey">Read</a>
                    <a href="{{route('article.edit', compact('article'))}}" class="btn border-0 btn-dark btn-writer-custom btn-custom-grey">Update</a>
                    <form action="{{route('article.destroy', compact('article'))}}" method="post" class="d-inline ">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn border-0 btn-dark btn-writer-custom btn-custom-delete">Delete</button>
                    </form>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>  
</div>
