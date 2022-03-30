
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
{{--    <link rel="stylesheet" href="css/app.css">--}}
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/template.css">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    {{-- <link rel="stylesheet" href="/css/login.css"> --}}
    @yield('style')

<link rel="icon" href="{{asset('/assets/logo.png')}}">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/admin-data-remover.js"></script>
    <script src="/js/file.js"></script>
    <script src="/js/cart.js" defer></script>
    <script src="/js/navbar.js"></script>
    <script src="https://kit.fontawesome.com/2f6e365e43.js" crossorigin="anonymous"></script>
</head>
<div>
    <nav class="position-fixed left-0 top-0 min-vh-100" style="width: 250px">
        <div class="h-100 w-100">
            <div class="d-flex justify-content-center align-items-center">
                <div class="d-flex flex-column d-flex justify-content-center">
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
                        @if(auth()->user()->name != 'admin')
                            <a href="/" class="p-0 m-0 hyperlink">Home</a>
                        @endif
                    <a href="/logout" class="p-0 m-0 hyperlink">Logout</a>

                        @if(auth()->user()->name == 'admin')
                            <a href="/manage-flower" class="p-0 m-0">Manage Flowers</a>

                            <a href="/manage-courier" class="p-0 m-0">Manage Couriers</a>

                            <a href="/manage-types" class="p-0 m-0">Manage Types</a>

                            <a href="/manage-users" class="p-0 m-0">Manage Users</a>

                            <a href="/transaction-history" class="p-0 m-0">Transaction History</a>
                        @endif

                    @else
                    <div class="nav-item top-active">
                    </div>
                    <div class="nav-item active">
                        <a href="/register" class="p-0 m-0 hyperlink">Register</a>
                    </div>
                    <div class="nav-item bottom-active">
                        <a href="/login" class="p-0 m-0 hyperlink">Login</a>
                    </div>

                    @endif

                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <div class="ml-3 relative">
                        <div class="flex justify-around items-center" style="width: 15rem">
                            @if(auth()->check())
                                <div style="height: 20px; max-width: 110px;">
                                    <h6 style="color: #FFF; height: 20px; max-width: 110px; display:inline-block; overflow:hidden; white-space: nowrap; text-overflow: fade;">Hello, {{auth()->user()->name}}</h6>
                                </div>
                            <a href="/profile">
                                <button type="button" class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src= "@if(auth()->check()){{auth()->user()->image ? asset((auth()->user()->image->directory)) : asset('/assets/blank_profile_picture.png')}} @else {{asset('/assets/blank_profile_picture.png')}} @endif" alt="">
                                </button>
                            </a>
                                @if(auth()->user()->name != 'admin')
                                    <a href="/cart" name="not-nav">
                                        <div id="cart-amount" class="bg-gray-800 flex items-center justify-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white px-3 py-1" style="color: #FFF; background-color: #121212; border-radius: 7px">
                                            {{-- <p style="padding: 0; margin: 0"><i class="fa fa-shopping-cart"></i> {{\App\Models\Cart::query()->where('user_id', '=', auth()->user()->id)->sum('quantity')}}</p> --}}
                                        </div>
                                    </a>
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


