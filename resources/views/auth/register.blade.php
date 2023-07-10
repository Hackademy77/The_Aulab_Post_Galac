<x-layout>

    <x-slot name="titlePage" >
        Register Page
    </x-slot>

    <div class="container-fluid masthead">
        <div class="row justify-content-center align-items-center vh-100">
                <div class="col-5 ">
                    
                    <form method="post" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label"></label>
                            <input type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name">
                            @error('name')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"></label>
                            <input type="text" placeholder="Email"  class="form-control @error('email') is-invalid @enderror" name="email">
                            @error('email')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label"></label>
                            <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password">
                            @error('password')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label"></label>
                            <input type="password" placeholder="Confirm your Password"class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation">
                            @error('password_confirmation')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-dark">Sign Up</button>
                    </form>
                </div>
        </div>
    </div>


</x-layout>