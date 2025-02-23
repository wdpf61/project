{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Multipurpose, super flexible, powerful, clean modern responsive bootstrap 5 admin template">
    <meta name="keywords"
        content="admin template, ra-admin admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="la-themes">
    <link rel="icon" href="{{ asset('assets') }}/images/logo/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/logo/favicon.png" type="image/x-icon">

    <title>Sign In | ra-admin - Premium Admin Template</title>

    <!--font-awesome-css-->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/fontawesome/css/all.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">

    <!-- tabler icons-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/tabler-icons/tabler-icons.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/bootstrap/bootstrap.min.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/style.css">

    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/responsive.css">

</head>

<body class="sign-in-bg">
    <div class="app-wrapper d-block">
        <div class="main-container">
            <!-- Body main section starts -->
            <div class="container">
                <div class="row sign-in-content-bg">
                    <div class="col-lg-6 image-contentbox d-none d-lg-block">
                        <div class="form-container ">
                            <div class="signup-content mt-4">
                                <span>
                                    <img src="{{ asset('assets') }}/images/logo/1.png" alt=""
                                        class="img-fluid ">
                                </span>
                            </div>

                            <div class="signup-bg-img">
                                <img src="{{ asset('assets') }}/images/login/04.png" alt="" class="img-fluid">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 form-contentbox">
                        <div class="form-container">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            @endif

                            <form class="app-form" method="POST" action="{{ url('customer/login') }}">

                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-5 text-center text-lg-start">
                                            <h2 class="text-primary f-w-600">Welcome To Customer </h2>
                                            <p>Sign in with your data that you enterd during your registration</p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Email</label>
                                            <input value="{{ old('email') }}" type="text" class="form-control"
                                                placeholder="Enter Your Username" id="email" name="email"> 
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}"
                                                    class="link-primary float-end">Forgot Password ?</a>
                                            @endif
                                            <input type="password" class="form-control"
                                                placeholder="Enter Your Password" id="password" name="password"
                                                required autocomplete="current-password"> 
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="remember_me" name="remember">
                                            <label class="form-check-label text-secondary" for="remember_me">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <button role="button" class="btn btn-primary w-100">Sign In</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="text-center text-lg-start">
                                            Don't Have Your Account yet? <a href="{{ route('register') }}"
                                                class="link-primary text-decoration-underline"> Sign up</a>
                                        </div>
                                    </div>
                                    <div class="app-divider-v justify-content-center">
                                        <p>Or sign in with</p>
                                    </div>
                                    <div class="col-12">
                                        <div class="text-center">
                                            <button type="button" class="btn btn-facebook icon-btn b-r-22 m-1"><i
                                                    class="ti ti-brand-facebook text-white"></i></button>
                                            <button type="button" class="btn btn-gmail icon-btn b-r-22 m-1"><i
                                                    class="ti ti-brand-google text-white"></i></button>
                                            <button type="button" class="btn btn-github icon-btn b-r-22 m-1"><i
                                                    class="ti ti-brand-github text-white"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Body main section ends -->
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('assets') }}/js/jquery-3.6.3.min.js"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets') }}/vendor/bootstrap/bootstrap.bundle.min.js"></script>

</body>

</html>
