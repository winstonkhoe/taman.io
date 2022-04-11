@extends('template.template')

@section('title')
<title>Home | Taman.io</title>
@endsection('title')

@section('style')
    <link rel="stylesheet" href="/css/home.css">
@endsection('style')

@section('content')
    <script src="/js/search.js" defer></script>
    <link rel="stylesheet" href='css/product.css'>
    <div class="container-fluid d-flex flex-column px-5 background min-vh-100 pt-5 align-items-center" style="">
        <div class="row mb-5">
            @for($i = 0; $i < count($data); $i++)
                <div class="product-card  ms-4 mt-4 py-4 px-5" style="height: 300px; width: 800px">
                    <span class="d-flex flex-column flex-grow-1">
                        <div class="w-100 h-25 d-flex align-items-center">
                            <h6 class="m-0 p-0" style="font-size: 1rem; font-weight: 700;">
                                @if ($data[$i]->garden)
                                Garden
                                @else
                                Service
                                @endif
                            </h6>
                            <p class="m-0 ms-3 p-0" style="font-size: 1rem; font-weight: 400;">
                                {{ \Carbon\Carbon::parse($data[$i]->created_at)->format('d M Y')}}
                            </p>
                            {{-- <p>{{$data[$i]->user}}</p> --}}
                        </div>
                        <div class="w-100 h-75 mt-3" style="">
                            <div class="w-100 h-25 d-flex align-items-center justify-content-between">
                                <a class="m-0 p-0" href="" style="font-size: 1rem; font-weight: 700;">
                                    @if ($data[$i]->garden)
                                        {{-- {{dd($data[$i]->garden[0]->offer)}} --}}
                                        {{-- {{$data[$i]->garden[0]->offer}} --}}
                                        @foreach ( $data[$i]->garden as $garden)
                                            {{$garden->offer->design->artist->name}}
                                        @endforeach
                                        {{-- {{$data[$i]->garden[0]->offer->design->artist->name}} --}}
                                    @else
                                        {{$data[$i]->service->seller->name}}
                                    @endif
                                    </a>
                                    @if ($data[$i]->garden)
                                        <span class="d-flex align-items-center">
                                            <p class="m-0 p-0 font-weight-bolder" style="font-size: 0.8rem;">Construction </p>
                                            <a class="m-0 ms-2 p-0" href="" style="font-size: 1rem; font-weight: 700;">
                                                {{-- {{" ".$data[$i]->garden[0]->offer->seller->name}} --}}
                                                @foreach ( $data[$i]->garden as $garden)
                                                    {{" ".$garden->offer->seller->name}}
                                                @endforeach
                                            </a>
                                        </span>
                                    @endif
                            </div>
                            @if ($data[$i]->garden)
                            <div class="w-100 h-25 d-flex justify-content-between mt-4">
                                <img src={{Storage::url("/uploads/".$data[$i]->garden[0]->offer->design->image->filename)}} style="width: 250px; height: 150px; object-fit: cover" alt="">
                                <div class="w-100 ms-3 d-flex flex-column justify-content-start">
                                    <h6 class="m-0 p-0 mb-3" style="font-size: 1.5rem; font-weight: 600">{{$data[$i]->garden[0]->offer->design->name}}</h6>
                                    <div class="d-flex justify-content-between" style="width: 250px">
                                        <p class="m-0 p-0" style="font-size: 0.9rem; font-weight: 700; opacity: 0.6;">Design Price</p>
                                        <p class="m-0 p-0" style="font-size: 0.9rem; font-weight: 600; opacity: 0.6;">{{"Rp ".number_format($data[$i]->garden[0]->offer->design->price)}}</p>
                                    </div>
                                    <div class="d-flex justify-content-between" style="width: 250px">
                                        <p class="m-0 p-0" style="font-size: 0.9rem; font-weight: 700; opacity: 0.6;">Construction Price</p>
                                        <p class="m-0 p-0" style="font-size: 0.9rem; font-weight: 600; opacity: 0.6;">{{"Rp ".number_format($data[$i]->garden[0]->offer->price)}}</p>
                                    </div>
                                    <hr class="my-2 w-50">
                                    <div class="d-flex flex-column">
                                        <p class="m-0 p-0" style="font-size: 0.9rem; font-weight: 700; opacity: 0.8;">Total</p>
                                        <h3 class="m-0 p-0" style="font-size: 1.4rem; font-weight: 700;">{{"Rp ".number_format($data[$i]->garden[0]->offer->design->price + $data[$i]->garden[0]->offer->price)}}</h3>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </span>
                </div>
            @endfor
        </div>
    </div>
@endsection('content')
