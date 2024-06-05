@extends('layouts.myapp')
@section('content')
    <div class="flex flex-col items-center justify-center max-w-screen-xl mx-auto my-20 ">
        <form class="w-full " action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="md:w-2/3 w-5/6 md:px-24 px-4 pb-8 mx-auto mt-2 space-y-12 bg-white border-2 border-gray-600 rounded-md">
                <div class="pb-12 border-b border-gray-900/10">
                    <h2 class="mt-2 text-lg font-bold leading-7 text-center text-gray-900">{{ __('New') }}</h2>

                    <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <div class="sm:col-span-3">
                            <label for="brand"
                                   class="block text-sm font-medium leading-6 text-gray-900">{{ __('Brand') }}</label>
                            <div class="mt-2">
                                <input type="text" name="brand" id="brand"
                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                            </div>
                            @error('brand')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="sm:col-span-3">
                            <label for="model"
                                   class="block text-sm font-medium leading-6 text-gray-900">{{ __('Model') }}</label>
                            <div class="mt-2">
                                <input type="text" name="model" id="model"
                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                            </div>
                            @error('model')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="engine"
                                   class="block text-sm font-medium leading-6 text-gray-900">{{ __('Engine') }}</label>
                            <div class="mt-2">
                                <input type="text" name="engine" id="engine"
                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                            </div>
                            @error('engine')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="sm:col-span-2">
                            <label for="quantity"
                                   class="block text-sm font-medium leading-6 text-gray-900">{{ __('Quantity') }}</label>
                            <div class="mt-2">
                                <input type="text" name="quantity" id="quantity"
                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                            </div>
                            @error('quantity')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="sm:col-span-2">
                            <label for="price_per_day"
                                   class="block text-sm font-medium leading-6 text-gray-900">{{ __('Price per day') }}
                            </label>
                            <div class="mt-2">
                                <input type="text" name="price_per_day" id="price_per_day"
                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                            </div>
                            @error('price_per_day')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="sm:col-span-3">
                            <label for="insurance_status"
                                   class="block text-sm font-medium leading-6 text-gray-900">{{__('OFF')}} %
                            </label>
                            <div class="mt-2">
                                <input type="number" name="reduce" id="reduce"
                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                            </div>
                            @error('reduce')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="sm:col-span-3">
                            <label for="stars"
                                   class="block text-sm font-medium leading-6 text-gray-900">{{ __('Car Stars') }}</label>
                            <div class="mt-2">
                                <select id="stars" name="stars"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="1">1/5</option>
                                    <option value="2">2/5</option>
                                    <option value="2">3/5</option>
                                    <option value="4">4/5</option>
                                    <option selected value="5">5/5</option>
                                </select>
                            </div>
                            @error('stars')
                            {{--                            <span class="text-red-500">{{ $message }}</span>--}}
                            @enderror
                        </div>


                        <div class="sm:col-span-3">
                            <label for="file-upload"
                                   class="block text-sm font-medium leading-6 text-gray-900">{{ __('Image') }}</label>
                            <input id="file-upload" name="image" type="file">

                        </div>
                        @error('image')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="sm:col-span-3">
                            <label for="status"
                                   class="block text-sm font-medium leading-6 text-gray-900">{{ __('Status') }}</label>
                            <div class="mt-2">
                                <select id="status" name="status"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="available">{{ __('Available') }}</option>
                                    <option value="unavailable">{{ __('Unavailable') }}</option>
                                </select>
                            </div>
                            @error('status')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                </div>
            </div>


            <div class="flex items-center justify-center my-6 gap-x-6">
                <a href="{{route('cars.index')}}"
                   class="w-20 p-1 text-sm font-semibold leading-6 text-center text-gray-900 border-2 rounded-md border-pr-200 hover:bg-white bg-sec-300">{{ __('Cancel') }}</a>
                <button type="submit"
                        class="w-1/3 px-3 py-2 text-sm font-semibold text-white rounded-md shadow-sm bg-pr-400 hover:bg-pr-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pr-400">{{ __('Save') }}</button>
            </div>

    </div>


    </form>

    </div>
@endsection