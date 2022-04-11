
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <title>Taman.io</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/template.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    @yield('style')

<link rel="icon" href="{{asset('/assets/logo.png')}}">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/admin-data-remover.js"></script>
    <script src="/js/file.js"></script>
    <script src="/js/cart.js" defer></script>
    <script src="/js/currency.js"></script>
    <script src="https://kit.fontawesome.com/2f6e365e43.js" crossorigin="anonymous"></script>
</head>
<div>
    <nav class="position-fixed left-0 top-0 min-vh-100" style="width: 250px">
        <div class="h-100 w-100">
            <div class="d-flex justify-content-center align-items-center">
                <div class="d-flex flex-column justify-content-center">
                    <span class="p-4">
                        <div class="container rounded-3 w-100 d-flex flex-column justify-content-center align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <img class="rounded-circle" style="width: 30px; height: 30px;" src="@if(auth()->check()){{auth()->user()->image ? Storage::url("/uploads/".(auth()->user()->image)) : asset('/assets/blank_profile_picture.png')}} @else {{asset('/assets/blank_profile_picture.png')}} @endif" alt="">
                                <h5 class="m-0 ms-3 p-0" style="width: 100px">
                                    @if (auth()->user())
                                        {{auth()->user()->name}}
                                    @else
                                        Guest
                                    @endif
                                </h5>
                            </div>
                            @if (auth()->user())
                                <a href=@if (auth()->user()->artist)
                                    {{"/artist"}}
                                @else
                                    {{"/register/artist"}}
                                @endif

                                class="nav-item d-flex align-items-center">
                                    <img class="rounded-circle" style="width: 30px; height: 30px;" src="@if(auth()->check()){{auth()->user()->artist && auth()->user()->artist->image ? Storage::url("/uploads/".(auth()->user()->artist->image)) : asset('/assets/blank_profile_picture.png')}} @else {{asset('/assets/blank_profile_picture.png')}} @endif" alt="">
                                    <h5 class="m-0 ms-3 p-0" style="width: 100px">
                                        @if (auth()->user()->artist)
                                            {{auth()->user()->artist->name}}
                                        @else
                                            Register Artist
                                        @endif
                                    </h5>
                                </a>
                                <a href=@if (auth()->user()->seller)
                                            {{"/seller"}}
                                        @else
                                            {{"/register/seller"}}
                                        @endif
                                class="nav-item d-flex align-items-center">
                                    <img class="rounded-circle" style="width: 30px; height: 30px;" src="@if(auth()->check()){{auth()->user()->seller && auth()->user()->seller->image ? Storage::url("/uploads/".(auth()->user()->seller->image)) : asset('/assets/blank_profile_picture.png')}} @else {{asset('/assets/blank_profile_picture.png')}} @endif" alt="">
                                    <h5 class="m-0 ms-3 p-0" style="width: 100px">
                                        @if (auth()->user()->seller)
                                            {{auth()->user()->seller->name}}
                                        @else
                                            Register Seller
                                        @endif
                                    </h5>
                                </a>
                            @endif
                        </div>
                    </span>
                    <div class="flex-shrink-0 w-100 ">
                        <a class="d-flex justify-content-center" href="/" name="not-nav">
                            <img class="w-50" src="{{asset('/assets/logo_full.png')}}" alt="plantSop">
                        </a>
                    </div>
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    @if(auth()->check())

                        <div class="nav-item">
                            <a href="/profile" class="p-0 m-0 hyperlink">Profile</a>
                        </div>
                        <div class="nav-item">
                            <a href="/" class="p-0 m-0 hyperlink">Home</a>
                        </div>
                        <div class="nav-item">
                            <a href="/transactions" class="p-0 m-0 hyperlink">Transactions</a>
                        </div>
                            <ul class="d-flex flex-column justify-content-center align-items-center w-100 m-0 p-0">
                                <li>
                                    <a href="/logout" class="p-0 m-0">
                                    <div class="nav-item hyperlink">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        <p class="p-0 m-0 ms-3">Logout</p>
                                    </div>
                                    </a>
                                </li>
                            </ul>
                    @else
                        <div class="nav-item active">
                            <a href="/register" class="p-0 m-0 hyperlink">Register</a>
                        </div>
                        <div class="nav-item">
                            <a href="/login" class="p-0 m-0 hyperlink">Login</a>
                        </div>
                    @endif
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ms-4 flex items-center md:ms-6">
                    <div class="ms-3 relative">
                        <div class="flex justify-around items-center" style="width: 15rem">
                            @if(auth()->check())
                            <a href="/profile">
                                    <span class="sr-only">Open user menu</span>
                            </a>
                                @if(auth()->user()->name != 'admin')

                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="" style="margin-left: 250px">
        {{-- <div id="content-refresh" class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 item-center"> --}}

            @yield('content')

        {{-- </div> --}}
    </main>
</div>
{{-- <footer class="bg-white mt-8">
    <div class=" h-10">
        <p class="text-base text-gray-400 xl:text-center">
            &copy; 2022 Tanam.io, Inc. All rights reserved.
        </p>
    </div>
</footer> --}}


