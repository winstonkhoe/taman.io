@extends('template.template')

@section('title')
    <title>Service | TamanKhoe</title>
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
        {{ csrf_field() }}

        <div class="container-fluid d-flex flex-column px-5 background min-vh-100 pt-5" style="">
            <h5 class="product-title header" style="font-weight: 700; font-size: 1.5rem;">{{ $data->name }}</h5>
            {{-- <div class="row mb-5"> --}}
            <div class="w-50" style="height: 300px">
                <img class="w-100 h-100 br-card"
                    src=@if ($data->image) {{ Storage::url('public/uploads/' . $data->image->filename) }} @else {{ asset('assets/no_image.webp') }} @endif
                    alt="Service"
                    style="@if ($data->image) object-fit: cover; @else object-fit:contain; @endif object-position: center">
            </div>
            <div class="d-flex mt-5 flex-grow">
                <div class="details d-flex flex-column w-75">
                    <section class="w-100">
                        <h5 class="product-title header my-3" style="font-weight: 600; font-size: 1.2rem;">Details</h5>
                        <p>{{ $data->description }}</p>
                    </section>
                </div>
                <div class="summary container br-card w-25">
                    <div class="d-flex flex-column p-3">

                        @if (auth()->user()->seller && auth()->user()->seller->id == $data->seller_id)
                            <button class="mt-5" type="submit">Modify Service</button>
                            <button class="mt-5" type="submit">Remove Service</button>
                        @else
                            <h6 class="header" style="font-size: 1.3rem; font-weight: 700;">Summary</h6>
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="header" style="font-size: 1rem; font-weight: 400;">Biaya Service</h6>
                                <h6 class="header" style="font-size: 1rem; font-weight: 400;">Rp
                                    {{ number_format($data->price) }}</h6>
                            </div>
                            <hr class="summary-separator">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="header" style="font-size: 1.3rem; font-weight: 700;">Total Cost</h6>
                                <h6 id="final-price" class="header" style="font-size: 1.3rem; font-weight: 700;">Rp
                                    {{ number_format($data->price) }}</h6>
                            </div>

                            <button class="mt-5" type="submit">Start Building</button>
                        @endif
                    </div>

                </div>

            </div>
            {{-- </div> --}}
        </div>
    </form>
@endsection('content')
