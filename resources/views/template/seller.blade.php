@extends('template.template')

@section('title')
<title>Seller | Taman.io</title>
@endsection('title')

@section('style')
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/seller.css">
@endsection('style')

@section('content')
    <script src="/js/search.js" defer></script>
    <link rel="stylesheet" href='css/product.css'>
    <div class="container-fluid d-flex flex-column px-5 background min-vh-100 pt-5" style="">
        <div class="seller-nav d-flex w-100 justify-content-center align-items-center my-4">
            <a href="/seller">
                <button class="@yield('home')">Home</button>
            </a>
            <a href="/add-service">
                <button class="@yield('add')">Add New Service</button>
            </a>
            <a href="/seller/edit-profile">
                <button class="@yield('profile')">Update Profile</button>
            </a>
        </div>
        @yield('sub_content')

    </div>

        {{-- <div class="product-container">
            <nav style="width: 30%" class="border-t border-gray-200 px-4 flex items-center justify-between sm:px-0 max-w-prose mx-auto">
                <div class="-mt-px w-0 flex-1 flex">
                    <a href="{{$data->previousPageUrl()}}" name="not-nav" class="border-t-2 border-transparent pt-4 pr-1 inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        <svg class="mr-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                        </svg>
                        Previous
                    </a>
                </div>
                <div class="hidden md:-mt-px md:flex">
                    @for($i = 1; $i <= $data[0]->lastPage(); $i++)
                        @if($i == $data[0]->currentPage())
                            <a href="#" name="not-nav" class="border-indigo-500 text-indigo-600 border-t-2 pt-4 px-4 inline-flex items-center text-sm font-medium" aria-current="page">
                                {{$i}}
                            </a>
                        @else
                            <a href="{{$data[0]->url($i)}}" name="not-nav" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 border-t-2 pt-4 px-4 inline-flex items-center text-sm font-medium">
                                {{$i}}
                            </a>
                        @endif
                    @endfor
                </div>
                <div class="-mt-px w-0 flex-1 flex justify-end">
                    <a href="{{$data[0]->nextPageUrl()}}" name="not-nav" class="border-t-2 border-transparent pt-4 pl-1 inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        Next
                        <svg class="ms-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </nav>
        </div> --}}
@endsection('content')
