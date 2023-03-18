<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="{{ asset('resources/css/app.css')}}"> -->
    @vite('resources/css/app.css')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <title>Registration</title>
</head>
<body class="font-bold text-xs">
    <p>Testing Github</p>
    <div class="container mx-auto bg-center bg-contain" style="background-image: url('{{ asset('img/bg.png') }}')">
        <div class="pt-7 flex justify-center">
            <img class="w-36 hover:animate-bounce" src="{{ asset('img/logo-1.svg')}}" alt="/">
        </div>
        <div class="row justify-content-center">
            <div class="w-3/4 mx-auto pt-10">
                <div class="card max w-full mx-auto lg:w-1/2">
                    <div class="flex font-bold justify-center md:text-xl">{{ __('Create An Account') }}</div>
                    <div class="flex justify-center mt-2 mb-7 md:text-xs text-slate-400">
                        <p>Already have an account?</p>
                        <a href="{{ route('login') }}" class="text-blue-500">Sign in here</a>
                    </div>

                    <button class="bg-slate-200 rounded-md p-2 w-full flex items-center justify-center text-blue-500 hover:bg-blue-300">
                        <div class="h-6 w-6 mr-2 bg-no-repeat bg-center bg-contain " style="background-image: url('{{ asset('img/icon-google.svg') }}')"></div>
                        Sign in with Google
                    </button>

                    <div class="flex items-center">
                        <hr class="flex-grow border-t border-gray-300">
                        <span class="py-7 bg-white text-slate-400 text-xs ">OR</span>
                        <hr class="flex-grow border-t border-gray-300">
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="grid grid-cols-1 gap-2 ">
                            <div class="grid grid-cols-2 grid-rows-1 mb-3 gap-3">
                                <div class="col-span-2 md:col-span-1">
                                    <label for="name" class="">{{ __('First Name') }}</label>

                                    <div class="mt-2">
                                        <input id="fname" type="text" class="form-control @error('name') is-invalid @enderror p-2 rounded bg-slate-200 w-full" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-span-2 pt-2 md:col-span-1 md:pt-0">
                                    <label for="lname" class="">{{ __('Last Name') }}</label>

                                    <div class="mt-2">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror p-2 rounded bg-slate-200 w-full" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="md:mb-3">
                                <label for="email" class="">{{ __('Email') }}</label>

                                <div class="mt-2">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror p-2 bg-slate-200 w-full rounded" name="email" value="{{ old('email') }}" required autocomplete="email">

                                </div>
                            </div>                          

                            <div class="">
                                <label for="password" class="">{{ __('Password') }}</label>

                                <div class="mt-2">
                                    <div class="relative">
                                        <input id="password-input" type="password" class="form-control @error('password') is-invalid @enderror p-2 bg-slate-200 w-full rounded" name="password" required autocomplete="new-password">
                                        <button id="pwd-text" type="button" onclick="togglePasswordVisibility()" class="absolute inset-y-0 right-0 px-2"><img src="{{ asset('img/eye-unhide.svg') }}" alt="Show Password" class="h-6 w-6"></button>
                                    </div>
                                </div>
                            </div>

                            <script>
                            function togglePasswordVisibility() {
                                var passwordInput = document.getElementById("password-input");
                                var pwdText = document.getElementById("pwd-text");
                                if (passwordInput.type === "password") {
                                    passwordInput.type = "text";            
                                    pwdText.innerHTML = '<img src="{{ asset('img/eye-hide.svg') }}" alt="Hide Password" class="h-6 w-6">';
                                } else {
                                    passwordInput.type = "password";
                                    pwdText.innerHTML = '<img src="{{ asset('img/eye-unhide.svg') }}" alt="Show Password" class="h-6 w-6">';
                                }
                            }
                            </script>

                            <div class="mt-2">
                                <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                                <div class="mt-2">
                                    <input id="password-confirm" type="password" class="form-control bg-slate-200 w-full p-2 rounded" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                
                                <div class="flex items-center mt-3">
                                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">terms and conditions</a>.</label>
                                </div>

                            </div>

                            <div class="mt-5">
                                <div class="flex justify-center">
                                    <button class="bg-blue-500 text-white rounded-md px-5 py-2">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="bg-transparent py-10">
            <div class="flex justify-center space-x-10 text-slate-400 ">
                <a href="#" class="hover:underline hover:text-blue-600">About</a>
                <a href="#" class="hover:underline hover:text-blue-600">Contact</a>
                <a href="#" class="hover:underline hover:text-blue-600">Contact Us</a>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</body>
</html>

