<form method="post" action="{{ route('article.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" >
        @error('title')
            <div class="alert text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="subtitle" class="form-label">Subtitle</label>
        <input type="text" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" >
        @error('subtitle')
            <div class="alert text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="img" class="form-label">Img</label>
        <input type="file" class="form-control" name="img" >
    </div>
    <div class="mb-3">
        <label for="category_id" class="form-label">Category</label>
            <select name="category_id" class="form-select" >
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>        
                @endforeach
            </select>
    </div>
    {{-- <div class="mb-3">
        <label for="tags" class="form-label">Tags</label>
            <select name="tags[]" class="form-select" multiple>
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>        
                @endforeach
            </select>
            <p class="small fst-italic">usare Ctrl + Click per selezionare più tag</p>
    </div> --}}
    <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <textarea name="body" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Salva</button>
</form>