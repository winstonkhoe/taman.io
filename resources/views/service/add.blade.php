@extends('template.seller')

@section('add')
    active
@endsection

@section('sub_content')
    <div class="min-vh-100 flex items-center justify-content-center px-5 soft-bg">
        <div class="max-w-md w-100">
            <form class="mt-5 d-flex flex-column w-100" action="" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
            <div class="py-5">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Add New Service
                </h2>
                <div class="w-100 d-flex flex-column align-items-center justify-content-center mt-5">
                    <label class="position-relative" for="file">
                        <img id="profile-image" class="rounded-3" style="width: 400px; height: 300px; object-fit: cover; cursor: pointer" src="{{asset("assets/no_image.webp")}}" alt="profile">
                        <input class="invisible position-absolute start-50 top-50 w-0 h-0" type="file" name="file" id="file" onchange="readURL(this);">
                    </label>
                    <h6 class="nav-link disabled">Service Illustration (Optional)</h6>
                </div>
            </div>
                <div class="d-flex w-100 flex-column">
                    <div class="mt-3 d-flex flex-column">
                        <label for="name">Name</label>
                        <div class="input-box d-flex">
                            <input id="name" name="name" type="name" value="" required class="flex-fill" placeholder="Jasa Cabut Rumput">
                        </div>
                    </div>

                    <div class="mt-3 d-flex flex-column">
                        <label for="address">Description</label>
                        <div class="input-box d-flex">
                            <input id="" name="description" type="text" value="" required class="flex-fill" placeholder="Rumput gone, duit gone sedikit only">
                        </div>
                    </div>

                    <div class="mt-3 d-flex flex-column">
                        <label for="email-address">Price<span class="requi" style="color: red">*</span></label>
                        <div class="input-box d-flex">
                            <input id="" name="price" type="number" value="" class="flex-fill" placeholder="50000">
                        </div>
                    </div>

                    <div class="mt-3 d-flex flex-column">
                        <label for="email-address">Time Estimation (Day)</label>
                        <div class="input-box d-flex">
                            <input id="" name="estimation" type="number" value="" class="flex-fill" placeholder="1">
                        </div>
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-center my-5">
                    <button type="submit" class="">
                        Add Service
                    </button>
                </div>
                <div class="mt-2 text-sm text-red-700">
                    @foreach($errors->all() as $e)
                        <ul class="list-disc pl-5 space-y-1">
                            {{$e}}
                        </ul>
                    @endforeach
                </div>
            </form>
        </div>
    </div>
@endsection('content')
