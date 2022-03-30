@extends('template')

@section('content')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <img class="mx-auto h-12 w-auto" src={{asset('/img/plantSop_cropped.png')}} alt="plantSop">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Register your account
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Or
                <a href="/login" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Already have an account?
                </a>
            </p>
        </div>
        <form class="mt-8 space-y-6" action="" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <div class="mt-6">
                    <label for="name" class="sr-only">Name</label>
                    <input id="name" name="name" type="name" autocomplete="name" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name">
                </div>
                <div class="mt-6">
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
                </div>
                <div class="mt-6">
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
                </div>
                <div class="mt-6">
                    <label for="password_confirmation" class="sr-only">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirm Password">
                </div>
                <div class="mt-6">
                    <label for="gender" class="sr-only">Gender</label>
                    <select name="gender" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" id="">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
{{--                    <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirm Password">--}}
                </div>
                <div class="mt-6">
                    <label for="address" class="sr-only">Address</label>
                    <input id="address" name="address" type="text" autocomplete="" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Type your address here...">
                </div>
                <div class="mt-6">
                    <label for="phone" class="sr-only">Phone Number</label>
                    <input id="phone" name="phone" type="number" autocomplete="" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Phone Number">
                </div>
                <div class="custom-file mt-6">
                    <input type="file" name="file" class="custom-file-input" id="file">
                    <label id="file-label" class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>

{{--            <div class="flex items-center justify-between">--}}
{{--                <div class="flex items-center">--}}
{{--                    <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">--}}
{{--                    <label for="remember-me" class="ml-2 block text-sm text-gray-900">--}}
{{--                        Remember me--}}
{{--                    </label>--}}
{{--                </div>--}}

{{--                <div class="text-sm">--}}
{{--                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">--}}
{{--                        Forgot your password?--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <!-- Heroicon name: solid/lock-closed -->
            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
          </span>
                    Sign Up
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
