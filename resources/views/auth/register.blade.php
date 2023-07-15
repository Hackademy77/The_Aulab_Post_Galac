<x-layout>

    <x-slot name="titlePage" >
        Register Page
    </x-slot>

    <div class="container-fluid masthead">
        <div class="row justify-content-center align-items-center vh-100">
                <div class="col-5 ">
                    <form method="post" action="{{ route('register') }}">
                        @csrf
                        <div class="box-login">
                            <div class="box">
                                <div class="form">
                                    <h2><span><i class="fa-solid fa-user fa-md pl-3 pt-0" style="color:#ebd2cf;"></i></span> Sign up </h2>
                                    
                                    <div class="inputBox">
                                        <input type="text" required="required" class=" @error('name') is-invalid @enderror" name="name"/>
                                        <span>Name</span>
                                        <i></i>
                                        @error('name')
                                            <div class="alert text-danger m-0 ">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="inputBox">
                                        <input type="text" required="required" class=" @error('email') is-invalid @enderror" name="email"/>
                                        <span>Email</span>
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
                                    <div class="inputBox">
                                        <input type="password" required="required " class=" @error('password_confirmation') is-invalid @enderror" name="password_confirmation" />
                                        <span>Confirm Password</span>
                                        <i></i>
                                        @error('password')
                                            <div class="alert text-danger m-0">{{ $message }}</div>
                                        @enderror 
                                    </div>
                                    {{-- <div class="links">
                                        <a href="#">Forgot Password</a>
                                        <a href="#">Sign Up</a>
                                    </div> --}}
                                    <input class="mt-3 px-0" type="submit" value="Register" />
                                    
                                </div>
                            </div>
                        </div>
                    </form> 
                </div>
        </div>
    </div>


</x-layout>