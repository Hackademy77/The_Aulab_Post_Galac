<x-layout>
    
    <x-slot name="titlePage">
        Home Page
    </x-slot>
    
    <x-masthead />
    <div class="container-fluid bg-body-tertiary pt-3 pb-5">
        <div class="container">
            <div class="row  my-5 text-center">
                <h2 class="display-4 fw-medium">New Articles</h2>
            </div>
        </div>
        <div class="container">
            <div class="row my-5 ">
                @foreach ($articles as $article)
                    @if ($loop->first)
                    <div class="col-12 ">
                        <x-articles.last :article="$article" />
                    </div>
                    @else
                    <div class="col-12 ">
                        <x-articles.last :article="$article" :order="$orderFirst" />
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-fluid bg-custom py-5">
        <div class="container">
            <div class="row  my-5 text-center">
                <h2 class="display-4 fw-medium">Update Articles</h2>
            </div>
        </div>
        <div class="container">
            <div class="row pt-5 pb-2 bg-body-tertiary ">
                <div class="col-12 ">
                    <div class="container">
                        <div class="carousel">
                            @foreach ($updateArticles as $updateArticle)
                            <input type="radio" name="slides" {{-- checked="checked" --}} id="{{ $updateArticle->id }}">
                            @endforeach
                            <ul class="carousel__slides">
                                @foreach ($updateArticles as $updateArticle)
                                <li class="carousel__slide">
                                    <figure>
                                        <div>
                                            <img src={{ Storage::url($updateArticle->image) }} alt="{{ $updateArticle->title }}">
                                        </div>
                                        <figcaption>
                                            <h4>{{ Str::limit($updateArticle->title, 22) }}</h4>
                                            <h6 class="credit">{{ Str::limit($updateArticle->subtitle, 60) }}</h6>
                                        </figcaption>
                                    </figure>
                                </li>
                                @endforeach
                            </ul>      
                            <ul class="carousel__thumbnails">
                                @foreach ($updateArticles as $updateArticle)
                                <li>
                                    <label for="{{ $updateArticle->id }}"><img src="{{ Storage::url($updateArticle->image) }}"
                                        alt="{{ $updateArticle->title }}"></label>
                                </li>
                                @endforeach    
                            </ul>      
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
        
        
    
    
            
            
</x-layout>
        