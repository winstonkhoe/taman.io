@extends('template.template')

@section('content')
    <div class="min-vh-100 flex items-center justify-content-center px-5 soft-bg">
        <div class="max-w-md w-100">
            <div class="py-5">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Edit Profile
                </h2>
                {{-- <div class="w-100 d-flex justify-content-center mt-5">
                    <img id="profile-image" class="" style="width: 200px; height: 200px; object-fit: cover; border-radius: 50%;" src={{Storage::url("/uploads/".auth()->user()->image)}} alt="profile">
                </div> --}}
                <div class="w-100 d-flex flex-column align-items-center justify-content-center mt-5">

                    <label class="position-relative" for="file">
                        <img id="profile-image" class="" style="width: 200px; height: 200px; object-fit: cover; border-radius: 50%; cursor: pointer;" src=
                        @if (auth()->user()->artist->image)
                            {{Storage::url("/uploads/".auth()->user()->image)}}
                        @else
                            {{asset("/assets/blank_profile_picture.png")}}

                        @endif alt="profile">
                        <input class="invisible position-absolute start-50 top-50 w-0 h-0" type="file" name="file" id="file" onchange="readURL(this);">
                    </label>
                    <h6 class="nav-link disabled">Edit Profile Picture</h6>

                </div>
            </div>
            <form class="mt-5 d-flex flex-column w-100" action="" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="d-flex w-100 flex-column">
                    <div class="mt-3 d-flex flex-column">
                        <label for="name">Name</label>
                        <div class="input-box d-flex">
                            <input id="name" name="name" type="name" value="{{auth()->user()->name}}" required class="flex-fill" placeholder="Name">
                        </div>
                    </div>
                    <div class="mt-3 d-flex flex-column">
                        <label for="email-address">Email address</label>
                        <div class="input-box d-flex">
                            <input id="email-address" name="email" type="email" value="{{auth()->user()->email}}" class="flex-fill" placeholder="Email address">
                        </div>
                    </div>

                    <div class="mt-3 d-flex flex-column">
                        <label for="address">Address</label>
                        <div class="input-box d-flex">
                            <input id="address" name="address" type="text" value="{{auth()->user()->address}}" required class="flex-fill" placeholder="Type your address here...">
                        </div>
                    </div>
                    <div class="mt-3 d-flex flex-column">
                        <label for="phone">Phone Number</label>
                        <div class="input-box d-flex">
                            <input id="phone" name="phone" type="text" value="{{auth()->user()->phone}}" required class="flex-fill" placeholder="Phone Number">
                        </div>
                    </div>
                    {{-- <p class="m-0 mt-3 p-0">Profile Picture</p>
                    <div class="custom-file d-flex flex-column">
                        <input type="file" name="file" class="custom-file-input" id="file" onchange="readURL(this);">
                        <label id="file-label" class="custom-file-label" value="" >{{auth()->user()->image}}</label>
                    </div> --}}
                </div>
                <div class="w-100 d-flex justify-content-center mt-5">
                    <button type="submit" class="">
                        Save Changes
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
