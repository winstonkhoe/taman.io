@extends('template')

@section('title')
<title>Home | Taman.io</title>
@endsection('title')

@section('style')
    <link rel="stylesheet" href="/css/home.css">
@endsection('style')

@section('content')
    <script src="/js/search.js" defer></script>
    <link rel="stylesheet" href='css/product.css'>
    <div class="container-fluid flex flex-wrap px-5 background" style="margin-top: 4rem;">
        <div class="row">
            @for($i = 0; $i < count($data[0]); $i++)
            <div class="col-3 product-card flex flex-col ml-4 p-0">
                <a href="/detail-product/{{$data[0][$i]->id}}">
                        <div class="w-100" style="height: 200px;">
                            @if ($data[0][$i]->image)
                                <img class="w-100 h-100" src={{asset("/uploads/".$data[0][$i]->image->filename)}} alt="Design" style="object-fit: cover; object-position: center">
                            @endif
                        </div>
                        <div class="w-100 flex flex-col p-3">
                            <h5 class="card-title header">{{$data[0][$i]->name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Rp {{$data[0][$i]->price}}</h6>
                            <div class="flex justify-evenly items-center" style="height: 30px;">
                                <button name="/min-product/{{$data[0][$i]->id}}" onclick="minProduct(this)"><i class="fa fa-trash" style="color: #E8584E"></i></button>
                                <button name="/add-product/{{$data[0][$i]->id}}" onclick="addProduct(this)"><i class="fa fa-shopping-cart" style="color: #56A36C"></i></button>
                            </div>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>

        {{-- <div class="product-container">
            <nav style="width: 30%" class="border-t border-gray-200 px-4 flex items-center justify-between sm:px-0 max-w-prose mx-auto">
                <div class="-mt-px w-0 flex-1 flex">
                    <a href="{{$data[0]->previousPageUrl()}}" name="not-nav" class="border-t-2 border-transparent pt-4 pr-1 inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
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
                        <svg class="ml-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </nav>
        </div> --}}
@endsection('content')
