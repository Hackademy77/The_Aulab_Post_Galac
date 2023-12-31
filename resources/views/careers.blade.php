<x-layout>
    <x-slot name="titlePage" >
        Work with us page
    </x-slot>

    <div class="container-fluid bg-custom text-white px-0 pb-5" >
        <div class="row justify-content-center align-items-center work-us mx-0">
            <h1 class="display-1 text-center">Work with us</h1>
        </div>

        <div class="container bg-custom-dark  border rounded-5 my-5 ">
            <div class="row align-items-center rounded p-2 ">
                <div class="col-12 col-md-6">
                    <h2>Work as Administrator</h2>
                    <p>What will you do: The administrator of our blog examines the work requests received, manages the Tags and Categories assigned to our articles by modifying, adding and/or deleting them.</p>
                    <h2>Work as Reviewer</h2>
                    <p>What will you do: The reviewer of our blog reviews all articles before publication which takes place only after its acceptance. It can also reject an article and send it for review later even after it has been published.</p>
                    <h2>Work as Editor</h2>
                    <p>What will you do: The editor of our blog writes the articles that will be published, assigns each one a category as well as the tags. He will always be able to delete or edit the articles he has written in order to always deliver high quality work.</p>
                </div>
                <div class="col-12 col-md-6">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach    
                            </ul>
                        </div>
                    @endif
                    
                    <form action="{{route('careers.submit')}}" method="POST" class="p-5">
                        @csrf
    
                        <div class="mb-3">
                            <label for="role" class="form-label">Which work you applying?</label>
                            <select name="role" id="role" class="form-control bg-custom">
                                <option value="">Choose here </option>
                                <option value="admin">Administrator</option>
                                <option value="revisor">Reviewer</option>
                                <option value="writer">Editor</option>
                            </select>
                        </div>
    
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control bg-custom" id="email" value="{{old('email') ?? Auth::user()->email}}">
                        </div>
    
                        <div class="mb-3">
                            <label for="message" class="form-label">Describe yourself</label>
                            <textarea name="message" class="form-control bg-custom" id="message" cols="30" rows="7" > {{old('message')}} </textarea>
                        </div>
    
                        <div class="mt-2">
                            <button class="btn bg-custom">Send your application</button>
                        </div>
                    </form>
    
                </div>
            </div>
        </div>
    
    </div>

</x-layout>