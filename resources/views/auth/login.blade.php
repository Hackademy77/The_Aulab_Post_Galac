<x-layout>
    <x-slot name="titlePage" >
        Login Page
    </x-slot>

    <div class="container-fluid masthead">
        <div class="row justify-content-center align-items-center vh-100">
                <div class="col-5 ">
                    
                    <form method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label"></label>
                            <input type="text" placeholder="Email" class="form-control  @error('email') is-invalid @enderror" name="email">
                            @error('email')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label"></label>
                            <input type="password" placeholder="Password" class="form-control @error('email') is-invalid @enderror" name="password">
                            @error('password')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-dark">Login</button>
                    </form>
                </div>
        </div>
    </div>


</x-layout>