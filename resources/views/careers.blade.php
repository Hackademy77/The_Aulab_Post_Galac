<x-layout>
    <x-slot name="titlePage" >
        Work with us page
    </x-slot>

    <div class="container-fluid p-5 bg-custom text-center text-white" >
        <div class="row justify-content-center">
            <h1 class="display-1">Work with us</h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center align-items-center border rounded p-2 shadow">
            <div class="col-12 col-md-6">
                <h2>Work as Administrator</h2>
                <p>What will you do: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis qui repudiandae commodi dignissimos, a pariatur culpa voluptas! Consectetur explicabo minus, rerum, molestias suscipit minima, aperiam ipsam facere earum velit blanditiis.</p>
                <h2>Work as Reviewer</h2>
                <p>What will you do: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis qui repudiandae commodi dignissimos, a pariatur culpa voluptas! Consectetur explicabo minus, rerum, molestias suscipit minima, aperiam ipsam facere earum velit blanditiis.</p>
                <h2>Work as Editor</h2>
                <p>What will you do: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis qui repudiandae commodi dignissimos, a pariatur culpa voluptas! Consectetur explicabo minus, rerum, molestias suscipit minima, aperiam ipsam facere earum velit blanditiis.</p>
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
                        <select name="role" id="role" class="form-control">
                            <option value="">Choose here </option>
                            <option value="admin">Administrator</option>
                            <option value="revisor">Reviewer</option>
                            <option value="writer">Editor</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Describe yourself</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="7" > {{old('message')}} </textarea>
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-dark text-white">Send your application</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-layout>