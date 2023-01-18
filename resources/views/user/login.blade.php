@extends('template.template')

@section('title')
<title>Login | TamanKhoe</title>
@endsection('title')

@section('style')
    <link rel="stylesheet" href="/css/login.css">
@endsection('style')

@section('content')
    <div class="w-100 position-relative" style="min-height: calc(100vh)">
        {{-- <img class="w-100 h-100 img-fluid position-absolute top-0 left-0" style="object-fit: cover; opacity: 0.6;" src={{asset('/assets/login-bg-2.jpg')}} alt="tanam.io"> --}}
        <div class="card position-absolute login-wrapper">
            <div class="w-100 h-100 login-card overflow-hidden">
            {{-- <div class="w-100" style="height: 40%">
                <img class="w-100 h-100" src={{asset('/assets/login-bg-2.jpg')}} alt="" style="object-fit: cover; object-position: center">
            </div> --}}
            <form class="" action="" method="POST">
            {{csrf_field()}}
            <div class="w-100 h-100 mx-auto d-flex flex-column align-items-center justify-content-center py-5">
                <h3 class="header">LOGIN</h3>
                <img class="my-5" src={{asset('/assets/tamankhoe.png')}} alt="" style="object-fit: contain; object-position: center; width: 150px; height: 150px;">
                <div class="w-100 h-75 d-flex flex-column align-items-center" style="height: 75%">
                    <div class="w-75 py-3 login-input mb-3" >
                        <div class="h-100 w-100 px-3 d-flex align-items-center" >
                            <i class="fa-solid fa-user"></i>
                            <input class="w-100 px-2" type="email" name="email" id="" placeholder="user@tamanio.com">
                        </div>
                    </div>
                    <div class="w-75 py-3 login-input mb-1" >
                        <div class="h-100 w-100 px-3 d-flex align-items-center" >
                            <i class="fa-solid fa-lock"></i>
                            <input class="w-100 px-2" type="password" name="password" id="" placeholder="Password">
                        </div>
                    </div>
                    <div class="w-75 d-flex justify-content-between mb-5 px-3">
                        <div class="d-flex items-center">
                            <input type="checkbox" name="remember_me" id="">
                            <span class="ms-2 hyperlink">Remember Me</span>
                        </div>
                        <a class="hyperlink" href="/register">Create Account</a>
                    </div>
                    <button class="login-btn py-2" style="width: 30%" type="submit">LOGIN</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    {{-- <div class="min-h-screen d-flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <img class="mx-auto h-25 w-auto" src={{asset('/assets/tamankhoe.png')}} alt="tanam.io">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Sign in to your account
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Or
                    <a href="/register" class="font-medium text-indigo-600 hover:text-indigo-500">
                        Don't have an account?
                    </a>
                </p>
            </div>

                <input type="hidden" name="remember" value="true">
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
                    </div>
                </div>

                <div class="d-flex items-center justify-between">
                    <div class="d-flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember-me" class="ms-2 block text-sm text-gray-900">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div>
                    <button type="submit" class="group relative w-full d-flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <!-- Heroicon name: solid/lock-closed -->
            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
          </span>
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div> --}}

</div>

@endsection('content')
