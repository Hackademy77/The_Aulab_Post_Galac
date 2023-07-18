<x-layout>
    <x-slot name="titlePage" >
        Login Page
    </x-slot>

    <div class="container-fluid masthead">
        <div class="row justify-content-center align-items-center vh-100">
                <div class="col-12 col-md-12">
                    <form method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="box-login">
                            <div class="box">
                                <div class="form">
                                    <h2><span><i class="fa-solid fa-user fa-md pl-3 pt-5" style="color:#ebd2cf;"></i></span> Sign in </h2>
                                    
                                    <div class="inputBox">
                                        <input type="text" required="required" class=" bg-custom  @error('email') is-invalid @enderror" name="email"/>
                                        <span>Username</span>
                                        <i></i>
                                        @error('email')
                                            <div class="alert text-danger m-0 ">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="inputBox">
                                        <input type="password" required="required " class=" @error('password') is-invalid @enderror" name="password" />
                                        <span>Password</span>
                                        <i></i>
                                        @error('password')
                                            <div class="alert text-danger m-0">{{ $message }}</div>
                                        @enderror 
                                    </div>
                                    {{-- <div class="links">
                                        <a href="#">Forgot Password</a>
                                        <a href="#">Sign Up</a>
                                    </div> --}}
                                    <input class="mt-5" type="submit" value="Login" />
                                    
                                </div>
                            </div>
                        </div>
                    </form> 
                </div>
        </div>
    </div>


</x-layout>