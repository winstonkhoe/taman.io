@extends('template.artist')

@section('home')
    active
@endsection

@section('sub_content')
    <div class="row mb-5">
        {{-- {{dd($data)}} --}}
        @for($i = 0; $i < count($data); $i++)
            <div class="product-card  ms-4 mt-4 p-0" style="width: 230px">
                <a class="d-flex flex-column flex-grow-1" href="/design/{{$data[$i]->id}}">
                    <div class="w-100" style="height: 200px">
                        <img class="w-100 h-100" src=@if ($data[$i]->image)
                            {{Storage::url("/uploads/".$data[$i]->image->filename)}}
                        @else
                        {{asset("/assets/no_image.webp")}}
                        @endif alt="Service" style="object-fit: cover; object-position: center">
                    </div>
                    <div class="w-100 h-100 d-flex flex-column p-3">
                        <div class="d-flex" style="height: 50px">
                            <h5 class="product-title header" style="font-weight: 800">{{$data[$i]->name}}</h5>
                        </div>
                        <div class="d-flex flex-grow-1">
                            <div class="d-flex flex-column w-100">
                                <div class="d-flex align-items-center my-2">
                                    <i class="fa-solid fa-hammer fa-xs"></i>
                                    <h6 class="card-subtitle ms-2 text-muted">{{$data[$i]->estimation_day}} Day</h6>
                                </div>

                                <h6 class="mb-2" style="font-size: 1.1rem">Rp {{number_format($data[$i]->price)}}</h6>

                            </div>

                        </div>
                    </div>
                </a>
            </div>
        @endfor
    </div>
@endsection
