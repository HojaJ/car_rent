@extends('layouts.myapp')
@section('content')
    <div class="grid place-items-center h-screen" style="">
        <div class="border p-5 md:w-1/2 w-4/5 bg-sec-100 -mt-48">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Email') }}</label>
                    <input type="email" id="email" name="email" class="bg-pr-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pr-500 focus:border-pr-500 block w-full p-2.5 " placeholder="">
                    @error('email')
                    <span><strong class="text-red-500">{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Password') }}</label>
                    <input type="password" id="password"
                           class="bg-pr-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pr-500 focus:border-pr-500 block w-full p-2.5 "
                           placeholder="" value="" name="password">
                    @error('password')
                    <span><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <button type="submit"
                        class="text-white bg-pr-400 hover:bg-pr-600 focus:ring-4 focus:outline-none focus:ring-pr-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-pr-600 dark:hover:bg-pr-700 dark:focus:ring-pr-800">{{ __('Login') }}</button>

                <div class="mt-4 ">
                    {{ __('Don’t have an account?') }} <a class=" font-medium hover:text-pr-400" href="{{route('register')}}">{{ __('Register') }}</a>
                </div>
            </form>
        </div>

    </div>
@endsection