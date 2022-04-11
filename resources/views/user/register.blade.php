@extends('template.template')

@section('title')
<title>Register | Taman.io</title>
@endsection('title')

@section('style')
    <link rel="stylesheet" href="/css/login.css">
@endsection('style')

@section('content')
    <div class="w-100 position-relative" style="min-height: calc(100vh)">
        <div class="card position-absolute login-wrapper" style="height: 700px">
            <div class="w-100 h-100 login-card overflow-hidden">
            <div class="w-100 h-100 mx-auto d-flex flex-column align-items-center py-5">
                {{-- <img class="w-auto mb-4" src={{asset('/assets/logo_full.png')}} alt="" style="object-fit: contain; object-position: center; width: 20%"> --}}
                <form class="w-100 h-100" action="" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                <div class="w-100 h-75 d-flex flex-column align-items-center" style="height: 75%">
                    <h3 class="m-0 header">REGISTER</h3>
                    <img class="my-3" src={{asset('/assets/logo_full.png')}} alt="" style="object-fit: contain; object-position: center; width: 120px; height: 120px;">
                    <div class="w-75 py-2 login-input mb-2" >
                        <div class="h-100 w-100 px-3 d-flex align-items-center" >
                            <div class="icon-input d-flex align-items-center">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <input class="w-100 px-2" type="text" name="name" id="" placeholder="Name">
                        </div>
                    </div>
                    <div class="w-75 py-2 login-input mb-2" >
                        <div class="h-100 w-100 px-3 d-flex align-items-center" >
                            <div class="icon-input d-flex align-items-center">
                                <i class="fa-solid fa-at"></i>
                            </div>
                            <input class="w-100 px-2" type="email" name="email" id="" placeholder="Email">
                        </div>
                    </div>
                    <div class="w-75 py-2 login-input mb-2" >
                        <div class="h-100 w-100 px-3 d-flex align-items-center" >
                            <div class="icon-input d-flex align-items-center">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <input class="w-100 px-2" type="text" name="phone" id="" placeholder="Phone">
                        </div>
                    </div>
                    <div class="w-75 py-2 login-input mb-2" >
                        <div class="h-100 w-100 px-3 d-flex align-items-center" >
                            <div class="icon-input d-flex align-items-center">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                            <input class="w-100 px-2" type="password" name="password" id="" placeholder="Password">
                        </div>
                    </div>
                    <div class="w-75 py-2 login-input mb-2" >
                        <div class="h-100 w-100 px-3 d-flex align-items-center" >
                            <div class="icon-input d-flex align-items-center">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                            <input class="w-100 px-2" type="password" name="password_confirmation" id="" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="w-75 py-2 login-input mb-1" >
                        <div class="h-100 w-100 px-3 d-flex align-items-center" >
                            <div class="icon-input d-flex align-items-center">
                                <i class="fa-solid fa-map"></i>
                            </div>
                            <textarea class="w-100 register-textarea px-2" name="address" id="" placeholder="Type your address.." style="height: 80px; resize: none;" ></textarea>
                        </div>
                    </div>
                    <div class="w-75 d-flex justify-between mb-2 px-3">
                        <a class="hyperlink" href="/login">Already have an account?</a>
                    </div>
                    <div class="w-75 d-flex align-items-center justify-center text-red-700 mb-2">
                        @if ($errors->all())
                        <p class="m-0">
                            {{$errors->all()[0]}}
                        </p>
                        @endif
                    </div>
                    <button type="submit" class="login-btn py-2" style="width: 30%">Register</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    {{-- <div class="min-h-screen flex align-items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <img class="mx-auto h-25 w-auto" src={{asset('/assets/logo_full.jpeg')}} alt="tanam.io">
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
        </div>
    </div> --}}

</div>

@endsection('content')
