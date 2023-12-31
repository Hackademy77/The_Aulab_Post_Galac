<x-layout>
    <x-slot name="titlePage" >
        Edit Article Page
    </x-slot>
    
    <div class="container-fluid p-5 bg-add">
        <div class="container">
            <div class="row pt-5 ">
                <div class="col-12">
                    <h1 class="display-4">Edit Your Article</h1>
                </div>
            </div>
        </div>
    </div>
        <div class="container-fluid bg-custom py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 ">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error )
                            <li>{{$error}}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="bg-custom-dark border rounded-5 p-5 text-white">
                        <form  action="{{route('article.update' , compact('article'))}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
    
                            <div class="mb-3">
                                <label for="title" class="form-label fw-bold">Title</label>
                                <input name="title" type="text" class="form-control" id ="title" value="{{$article->title}}">
                            </div>
    
                            <div class="mb-3">
                                <label for="subtitle" class="form-label fw-bold ">Subtitle</label>
                                <input name="subtitle" type="text" class="form-control" id ="title" value="{{$article->subtitle}}">
                            </div>
    
                            <div class="mb-3">
                                <label for="image" class="form-label fw-bold ">Image</label>
                                <input name="image" type="file" class="form-control" id ="image"> 
                            </div>
    
                            <div class="mb-3">
                                <label for="category" class="form-label fw-bold ">Catergory</label>
                                <select name="category"  id="category" class="form-control text-capitalize ">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}" @if($article->category && $category->id == $article->category->id) selected @endif>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="tags" class="form-label fw-bold ">Tags: </label>
                                <input name="tags" class="form-control" id ="tags" value = "{{$article->tags->implode('name', ', ')}}"> 
                                <span class="small fst-italic">"Divide each tag with a comma"</span>
                            </div>

                            <div class="mb-3">  
                                <label for="body" class="form-label fw-bold ">Body Text</label>
                                <textarea name="body" id="body" cols="30" rows="10" class="form-control"> {{$article->body}}</textarea>
                            </div>
    
                            <div class="mt-2">
                                <button class="btn bg-custom">Put your Article </button>
                                <a class="btn bg-custom" href="{{route('home')}}">Back to Home </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
</x-layout>