@extends('template.template')

@section('content')
    <div class="min-vh-100 flex items-center justify-content-center px-5 soft-bg">
        <div class="max-w-md w-100">
            <form class="d-flex flex-column w-100" action="" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="py-5">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Register Artist
                </h2>
                <div class="w-100 d-flex flex-column align-items-center justify-content-center mt-5">
                    <label class="position-relative" for="file">
                        <img id="profile-image" style="width: 200px; height: 200px; object-fit: cover; border-radius: 50%; cursor: pointer;" src="{{asset('/assets/blank_profile_picture.png')}}" alt="profile">
                        <input class="invisible position-absolute start-50 top-50 w-0 h-0" type="file" name="file" id="file" onchange="readURL(this);">
                    </label>
                    <h6 class="nav-link disabled">Add Profile Picture</h6>
                </div>
            </div>
                <div class="d-flex w-100 flex-column">
                    <div class="mt-3 d-flex flex-column">
                        <label for="name">Name</label>
                        <div class="input-box d-flex">
                            <input id="name" name="name" type="name" value="" required class="flex-fill" placeholder="Name">
                        </div>
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-center mt-5">
                    <button type="submit" class="">
                        Register
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
