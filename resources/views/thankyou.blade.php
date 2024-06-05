<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank you</title>
    @vite('resources/css/app.css')
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-32x32.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

</head>

<body class="mx-auto max-w-screen-xl bg-gray-200">
    <div class="h-screen bg-gray-200 flex justify-center items-center ">
        <div class="bg-white md:w-3/5 h-4/5 rounded-lg mx-4 shadow-xl flex flex-col justify-start items-center gap-8">
            <div class="w-32 mt-10">
                <img loading="lazy"  src="/images/logos/LOGO.png" alt="">
            </div>
            <div class="">
                <h1 class="font-car font-bold text-gray-900 text-6xl text-center">{{ __('Thank You') }}</h1>
                <p class="font-car text-center">{{ __("Thank you for choosing and trusting our car company") }}</p>
            </div>
            <div class="relative bg-gray-200 md:w-3/5 m-4 md:mt-10">
                <div
                    class="w-0 h-0 absolute -top-[29px] left-[215px] border-l-[20px] border-l-transparent border-b-[30px] border-b-gray-200 border-r-[20px] border-r-transparent">
                </div>
                <div class="p-3">
                        <a href="{{route('clientReservation')}}"
                            class="w-full p-2 m-2 text-white bg-gray-700 font-semibold rounded-md hover:bg-black flex justify-center items-center gap-3 hover:cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                    svg {
                                        fill: #ffffff
                                    }
                                </style>
                                <path
                                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                            </svg>
                            <p>{{ __('Go to reservations') }}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
