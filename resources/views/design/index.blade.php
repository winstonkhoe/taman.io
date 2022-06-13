@extends('template.template')

@section('title')
<title>Design | Taman.io</title>
@endsection('title')

@section('style')
    <link rel="stylesheet" href="/css/design.css">
@endsection('style')

@section('content')
<?php
    $constructor_price = 0;
?>
    <script src="/js/design.js"></script>
    <link rel="stylesheet" href='css/product.css'>
    <form action="" action="" method="POST">
    {{csrf_field()}}

    <div class="container-fluid d-flex flex-column px-5 background min-vh-100 pt-5" style="">
        <h5 class="product-title header" style="font-weight: 700; font-size: 1.5rem;">{{$data->name}}</h5>
        {{-- <div class="row mb-5"> --}}
            <div class="w-50" style="height: 300px">
                @if ($data->image)
                <img class="w-100 h-100 br-card" src={{Storage::url("/uploads/".$data->image->filename)}} alt="Design" style="object-fit: cover; object-position: center">
                @endif
            </div>
            <div class="d-flex mt-5 flex-grow">
                <div class="details d-flex flex-column w-75">
                    <section class="w-100">
                        <h5 class="product-title header my-3" style="font-weight: 600; font-size: 1.2rem;">Details</h5>
                        <p>{{$data->description}}</p>
                    </section>
                    <section class="w-100">
                        <h5 class="product-title header my-3" style="font-weight: 600; font-size: 1.2rem;">Contractors</h5>
                        <div class="container-fluid d-flex w-100">
                            <div class="row w-100">
                                @for($j = 0; $j < count($data->contractors); $j++)
                                    <div class="col-4">
                                        {{-- <div class="container br-card d-flex align-items-center p-3 mt-4" onclick="setPrice(1000, 5000)"> --}}
                                        <label class="constructor-option w-100 h-100" >
                                            <input type="radio" name="offer_id" id={{$data->contractors[$j]->seller->id}} value={{$data->contractors[$j]->id}}>
                                            <div class="container br-card d-flex align-items-center p-3 mt-4" onclick="setPrice(`{{number_format($data->contractors[$j]->price)}}`, `{{number_format($data->price + $data->contractors[$j]->price)}}`)">
                                                <div class="" style="height: 50px; width: 50px">
                                                    <img class="w-100 h-100 rounded-circle" src={{Storage::url("/uploads/".$data->contractors[$j]->seller->image)}} alt="profile-picture" style="object-fit: cover; object-position: center">
                                                </div>
                                                <div class="d-flex flex-column ms-3">
                                                    <p class="m-0 p-0" style="font-weight: 800">
                                                        {{$data->contractors[$j]->seller->name}}
                                                    </p>
                                                    <p class="m-0 p-0" style="font-size: 0.75rem; font-weight: 600">
                                                        Rp {{number_format($data->contractors[$j]->price)}}
                                                    </p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </section>
                </div>
                <div class="summary container br-card w-25 mb-5">
                    <div class="d-flex flex-column p-3">

                        <?php
                            $contractors = [];
                            foreach ($data->contractors as $key => $value) {
                                array_push($contractors, $value->seller->id);
                            };
                        ?>
                            <h6 class="header" style="font-size: 1.3rem; font-weight: 700;">Summary</h6>
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="header" style="font-size: 1rem; font-weight: 400;">Biaya Design</h6>
                                <h6 class="header" style="font-size: 1rem; font-weight: 400;">Rp {{number_format($data->price)}}</h6>
                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="header" style="font-size: 1rem; font-weight: 400;">Biaya Konstruksi</h6>
                                <h6 id="construction-price" class="header" style="font-size: 1rem; font-weight: 400;">Rp {{number_format($constructor_price)}}</h6>
                            </div>
                            <hr class="summary-separator">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="header" style="font-size: 1.3rem; font-weight: 700;">Total Cost</h6>
                                <h6 id="final-price" class="header" style="font-size: 1.3rem; font-weight: 700;">-</h6>
                            </div>

                            <button class="mt-5" type="submit">Start Building</button>
                            @if ((auth()->user()->artist && auth()->user()->artist->id == $data->artist_id) || (auth()->user()->seller && in_array(auth()->user()->seller->id, $contractors)))
                                @if (auth()->user()->artist && auth()->user()->artist->id == $data->artist_id)
                                    <button class="mt-5">Modify Design</button>
                                    <button class="mt-2">Remove Design</button>
                                @endif
                                @if(auth()->user()->seller && in_array(auth()->user()->seller->id, $contractors))
                                    <a href="/contractor/quit/design/{{$data->id}}" class="mt-2 w-100 d-flex">
                                        <button class="flex-fill" type="button">Quit From Contractor Geng</button>
                                        {{-- <button class="mt-5" type="text">Quit From Contractor Geng</button> --}}
                                    </a>
                                    @elseif(auth()->user()->seller && !in_array(auth()->user()->seller->id, $contractors))
                                    <a href="/contractor/join/design/{{$data->id}}" class="mt-2 w-100 d-flex">
                                        <button class="flex-fill" type="button">Join Contractor Geng</button>
                                        {{-- <button class="mt-5" type="text">Join Contractor Geng</button> --}}
                                    </a>
                                @endif
                            @endif
                    </div>

                </div>

            </div>
        {{-- </div> --}}
    </div>
    </form>
@endsection('content')
