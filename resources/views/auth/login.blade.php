<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')`
    <!-- @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"]) -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    
    <!-- <link rel="stylesheet" href="{{ asset('vendor/sweetalert/sweetalert.css') }}">
    <script src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script> -->

    <title>Login</title>
</head>
<body class="font-sans">
    <div class="container mx-auto bg-center bg-contain" style="background-image: url('{{ asset('img/bg.png') }}')">
        <div class="pt-6 flex justify-center">
            <img class="w-36 hover:animate-bounce" src="{{ asset('img/logo-1.svg')}}" alt="/">
        </div>
        <div class="row justify-content-center">
            <div class="w-3/4 mx-auto pt-10">
                <div class="card max w-full mx-auto lg:w-1/2">
                    <h1 class="flex justify-center font-bold text-xl">Sign In to Metronic</h1>
                    <p class="flex justify-center text-xs text-slate-400">New Here? 
                        <a href="{{ route('register') }}" class="text-blue-600">Create an Account</a>
                    </p> 
                    <form method="POST" action="{{ route('login') }}" class="space-y-8">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="mt-2">
                                <input id="email" type="email" class="w-full rounded-md p-2 bg-slate-200" name="email" >

                                <!-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="flex justify-between">
                                <label for="password" class="text-left">Password</label>
                                <a href="#" class="text-right text-blue-600 hover:text-red-500">Forget Password?</a>
                            </div>

                            <div class="mt-2">
                                <input id="password" type="password" class="form-control w-full rounded-md p-2 bg-slate-200" name="password" autocomplete="current-password">
                                <span id="password-error" class="text-red-600"></span>
                            </div>

                            <!-- <div class="mt-2">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror w-full rounded-md p-2 bg-slate-200" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> -->
                            
                        </div>
                        <div class="flex flex-col space-y-3 text-slate-700">
                            <button id="" type="button" onclick="validate()" class="bg-blue-600 text-white rounded-md p-2 px-20 w-full hover:bg-blue-300">Continue</button>
                            <h1 class="flex text-slate-500 text-xs justify-center p-">OR</h1>

                            <button class="bg-slate-200 rounded-md p-2 w-full flex items-center justify-center hover:bg-blue-300">
                                <div class="h-6 w-6 mr-2 bg-no-repeat bg-center bg-contain " style="background-image: url('{{ asset('img/icon-google.svg') }}')"></div>
                                Continue with Google
                            </button>
                            <button class="bg-slate-200 rounded-md p-2 w-full flex items-center justify-center hover:bg-blue-300">
                                <div class="h-6 w-6 mr-2 bg-no-repeat bg-center bg-contain" style="background-image: url('{{ asset('img/icon-facebook.svg') }}')"></div>
                                Continue with Facebook
                            </button>
                            <button class="bg-slate-200 rounded-md p-2 w-full flex items-center justify-center hover:bg-blue-300">
                                <div class="h-6 w-6 mr-2 bg-no-repeat bg-center bg-contain" style="background-image: url('{{ asset('img/icon-apple.svg') }}')"></div>
                                Continue with Apple
                            </button>
                        </div>
                    </form>
                </div>            
            </div>
        </div> 
        <footer class="bg-transparent py-10">
            <div class="flex justify-center space-x-10 text-slate-500 ">
                <a href="#" class="hover:underline hover:text-blue-600">About</a>
                <a href="#" class="hover:underline hover:text-blue-600">Contact</a>
                <a href="#" class="hover:underline hover:text-blue-600">Contact Us</a>
            </div>
        </footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>

        function validate(){
            var valid = true;

            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            // var regExp = /(.+)@.(.+)/;
 
            if (!email || !password) {
                if (!email) {
                    valid = false;
                    Swal.fire({
                        title: "Error",
                        text: "You must enter your email",
                        icon: "error",
                        timer: 2000, // 5 second timer
                    });
                    
                } else {
                    Swal.fire({
                        title: "Error",
                        text: "You must enter your password",
                        icon: "error",
                        timer: 2000, // 5 second timer
                    });
                    // alert("You Must enter Your password");
                    valid = false;
                }
                } else {
                if (!email.includes("@") || !email.includes(".")) {
                    Swal.fire({
                        title: "Error",
                        text: "Please enter a valid email address",
                        icon: "error",
                        timer: 2000, // 5 second timer
                    });
                    // alert("Please enter a valid email address");
                    valid = false;
                } else if (password.length < 8) {
                    Swal.fire({
                        title: "Error",
                        text: "Password must be at least 8 characters long",
                        icon: "error",
                        timer: 2000, // 5 second timer
                    });
                    // alert("Password must be at least 8 characters long");
                    valid = false;
                }
            }
        }
    </script>
</body>
</html>
