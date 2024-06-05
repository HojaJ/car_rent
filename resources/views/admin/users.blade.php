@extends('layouts.myapp')
@section('content')
    <div class="mx-auto max-w-screen-xl">

        {{-- Admins --}}
        <div id="reservations" class="mt-12">
            <div class="flex align-middle justify-center">
                <a href="{{ route('addAdmin') }}" class="flex  border-2 border-pr-500 hover:text-white hover:bg-pr-400 font-car font-medium p-1 " >
                    <button>{{ __('Create') }}</button>
                </a>
                <hr>
            </div>

        </div>

        <div class="w-full overflow-hidden rounded-lg shadow-xs mb-12">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap overflow-scroll table-auto text-center">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="text-center px-4 py-3">{{ __('Client') }}</th>
                            <th class="text-center px-4 py-3 w-48">{{ __('Name') }}</th>
                            <th class="text-center px-4 py-3 w-24">{{ __('Email') }}</th>
                            <th class="text-center px-4 py-3 w-24">{{ __('Joined at') }}</th>
                            <th class="text-center px-4 py-3 w-26">{{ __('Action') }}</th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">


                        @forelse ($users as $client)
                            <tr class="text-gray-700 dark:text-gray-400">

                                <td class="px-4 py-3 text-sm w-1/12">
                                    <img loading="lazy" src="{{ $client->avatar }}" alt="">
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <p>
                                        {{ $client->name }}
                                    </p>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <p>
                                        {{ $client->email }}
                                    </p>
                                </td>
                                <td class="px-4 py-3 text-sm w-32">
                                    <p>
                                        {{ Carbon\Carbon::parse($client->created_at)->format('Y-m-d') }}
                                    </p>
                                </td>

                                <td class="px-4 py-3 text-sm w-32">
                                    <a href="{{ route('userDetails', ['user' => $client->id]) }}" >
                                        <button type="submit"
                                            class="bg-blue-500 text-white p-3 rounded-md hover:bg-blue-700">
                                            {{ __('Details') }}
                                        </button>
                                    </a>

                                </td>



                            </tr>
                        @empty
                        @endforelse


                    </tbody>
                </table>
            </div>
            <div class="flex justify-center my-12 w-full">
        {{ $users->links('pagination::tailwind') }}
    </div>
        </div>


    </div>
@endsection
