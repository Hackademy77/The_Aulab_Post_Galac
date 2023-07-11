<x-layout>
    <x-slot name="titlePage" >
        Create Article Page
    </x-slot>

    <x-masthead />

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1 class="fst-italic">Add Article <i class="fa-solid fa-newspaper fa-bounce fa-xl" style="color: #ebd2cf;"></i></h1>
            </div>
        </div>
    </div>

    {{-- <div class="container">
        <div class="row my-5">
            <div class="col-6">
                <x-articles.createform 
                :categories="$categories"
                />
            </div>
        </div>
    </div> --}}

    <div class="container my5">
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
                <form class="card p-5 shadow  border border-danger bg-custom" action="{{route('article.store')}}" method="post"enctype="multipart/form-data">
                    @csrf

                    <div class="mb3">
                        <label for="title" class="form-label fw-bold ">Title</label>
                        <input name="title" type="text" class="form-control" id ="title" value="{{old('title')}}">
                    </div>

                    <div class="mb3">
                        <label for="subtitle" class="form-label fw-bold ">Subtitle</label>
                        <input name="subtitle" type="text" class="form-control" id ="title" value="{{old('subtitle')}}">
                    </div>

                    <div class="mb3">
                        <label for="image" class="form-label fw-bold ">Immagine</label>
                        <input name="image" type="file" class="form-control" id ="image">
                    </div>

                    <div class="mb3">
                        <label for="category" class="form-label fw-bold ">Catergory</label>
                        <select name="category"  id="category" class="form-control text-capitalize ">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">  
                        <label for="body" class="form-label fw-bold ">Body Text</label>
                        <textarea name="body" id="body" cols="30" rows="10" class="form-control"> {{old('body')}}</textarea>
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-dark">Put yout Article </button>
                        <a class="btn btn-dark" href="{{route('home')}}">back to Home </a>
                    </div>
                </form>

            </div>
        </div>
    </div>






</x-layout>