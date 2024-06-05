<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('jquery-3.6.0.min.js') }}"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-32x32.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">


    <title>{{ config('app.name', 'Rent Car') }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-sec-400">

    {{-- -------------------------------------------------------------- Header -------------------------------------------------------------- --}}
    @guest
        <header>
            <nav class="bg-sec-600 border-gray-200 px-4 lg:px-6 py-4 dark:bg-gray-800 ">
                <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl drop-shadow-2xl">
                    {{-- LOGO --}}
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img loading="lazy" src="{{ asset('images/logos/logo.png') }}" class="mr-3 h-12" alt="Logo" />
                    </a>

                    {{-- login & Register buttons --}}
                    <div class="flex items-center  lg:order-2">
                        @include('layouts.language')


                        {{-- Mobile menu --}}
                        <button data-collapse-toggle="mobile-menu-2" type="button"
                            class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="mobile-menu-2" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                    {{-- Menu --}}
                    <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                        <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                            <li>
                                <a href="{{ route('home') }}">
                                    <div class="group text-center">
                                        <div class="group-hover:cursor-pointer">{{ __('Home') }}</div>
                                        <div
                                            class="block invisible bg-pr-400 w-12 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                        </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('cars') }}">
                                    <div class="group text-center">
                                        <div class="group-hover:cursor-pointer">{{ __('Cars') }}</div>
                                        <div
                                            class="block invisible bg-pr-400 w-8 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                        </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact_us') }}">
                                    <div class="group text-center">
                                        <div class="group-hover:cursor-pointer">{{ __('Contact us') }}</div>
                                        <div
                                            class="block invisible bg-pr-400 w-20 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                        </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    @else
        <header>
            <nav class="bg-sec-600 border-gray-200 px-4 lg:px-6 py-4 dark:bg-gray-800">
                <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                    {{-- LOGO --}}
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img loading="lazy" src="{{ asset('images/logos/logo.png') }}" class="mr-3 h-12" alt="Logo" />
                    </a>

                    {{-- Dropdown button --}}


                    @if (Auth::user()->role == 'admin')
                        <div class="hidden justify-between mb-6 items-center w-full lg:flex lg:w-auto" id="mobile-menu-2">
                            <ul class="flex flex-col  font-medium lg:flex-row lg:space-x-8 lg:mt-0 ">
                                <li>
                                    <a href='{{ route('adminDashboard') }}'>
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer">{{ __('Dashboard') }}</div>
                                        </div>
                                    </a>

                                </li>

                                <li class=' '>
                                    <a href="{{ route('cars.index') }}">
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer ">{{ __('Cars') }}</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('users') }}">
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer">{{ __('Users') }}</div>
                                            <div
                                                class="block invisible bg-pr-400 w-10 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                            </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        @include('layouts.language')

                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="text-black bg-pr-400 hover:bg-pr-600 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center "
                            type="button">
                            <img loading="lazy" src="/images/user.png" width="24" alt="user icon" class="mr-3">
                            <p> Admin ( {{ Auth::user()->name }} ) </p>
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>

                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="{{ route('adminDashboard') }}" class="block px-4 py-2 hover:bg-pr-200 dark:hover:bg-gray-600 dark:hover:text-white">{{ __('Dashboard') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('users') }}" class="block px-4 py-2 hover:bg-pr-200 dark:hover:bg-gray-600 dark:hover:text-white">{{ __('Users') }}</a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 hover:bg-pr-200 " href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="hidden">
                                        @csrf
                                    </form>

                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="hidden justify-between items-center w-full lg:flex lg:w-auto" id="mobile-menu-2">
                            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                                <li>

                                    <a href="{{ route('home') }}">
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer">{{ __('Home') }}</div>
                                            <div
                                                class="block invisible bg-pr-400 w-12 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                            </div>
                                        </div>
                                    </a>

                                </li>
                                <li>
                                    <a href="{{ route('cars') }}">
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer">{{ __('Cars') }}</div>
                                            <div
                                                class="block invisible bg-pr-400 w-8 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact_us') }}">
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer">{{ __('Contact us') }}</div>
                                            <div
                                                class="block invisible bg-pr-400 w-20 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                            </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        @include('layouts.language')

                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="text-black bg-pr-400 hover:bg-pr-600 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center "
                            type="button">
                            <img loading="lazy" src="/images/user.png" width="24" alt="user icon" class="mr-3">
                            {{ Auth::user()->name }}
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton">

                                <li>
                                    <a href="{{ route('clientReservation') }}"
                                        class="block px-4 py-2 hover:bg-pr-200 ">{{ __('Reservation') }}</a>
                                </li>

                                <li>
                                    <a class="block px-4 py-2 hover:bg-pr-200 " href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="hidden">
                                        @csrf
                                    </form>

                                </li>
                            </ul>
                        </div>
                    @endif
                    {{-- Mobile menu --}}
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    {{-- Menu --}}

                </div>
            </nav>
        </header>
    @endguest

    {{-- --------------------------------------------------------------- Main  --------------------------------------------------------------- --}}
    <main>
        @yield('content')
    </main>
    {{-- --------------------------------------------------------------- Footer  --------------------------------------------------------------- --}}
        <footer class="px-4  sm:p-6 bg-gray-800">
            <div class="pt-10 mx-auto max-w-screen-xl relative">
                <div class="md:flex md:justify-between">
                    <div class="mb-12 md:mb-0 flex justify-center ">
                        <a href="" class="flex items-center">
                            <img loading="lazy" src="{{ asset('footer_logo.png') }}" class="mr-3 h-24"
                                alt="Logo" />
                        </a>
                    </div>

                    <div class="grid grid-cols-3 gap-8 ">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold  uppercase text-white">{{ __('Follow us') }}</h2>
                            <ul class="text-gray-400">
                                <li class="mb-4">
                                    <a href="javascript:void(0)">Instagram</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Twitter</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold  uppercase text-white">{{ __('Legal') }}</h2>
                            <ul class=" text-gray-400">
                                <li class="mb-4">
                                    <a href="javascript:void(0)" class="hover:underline">{{ __('Privacy Policy') }}</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="hover:underline">{{ __('Terms & Conditions') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <hr class="my-6  sm:mx-auto border-gray-700 lg:my-8" />

                <div class="sm:flex sm:items-center sm:justify-between md:ms-0 pb-4  ms-32">
                    <span class="text-sm sm:text-center text-gray-400 md:ms-0 -ms-8">© 2024. {{ __('All Rights Reserved') }}.
                    </span>
                </div>
                <div>
                    <a href="javascript:void(0);" onclick="scrollToTop();"
                        class="text-white absolute top-4 md:-right-8 -right-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 512 512">
                            <path
                                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM135.1 217.4l107.1-99.9c3.8-3.5 8.7-5.5 13.8-5.5s10.1 2 13.8 5.5l107.1 99.9c4.5 4.2 7.1 10.1 7.1 16.3c0 12.3-10 22.3-22.3 22.3H304v96c0 17.7-14.3 32-32 32H240c-17.7 0-32-14.3-32-32V256H150.3C138 256 128 246 128 233.7c0-6.2 2.6-12.1 7.1-16.3z" />
                        </svg>
                    </a>

                </div>
            </div>
        </footer>

</body>
<script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>
<script>
    if(!Util) function Util () {};

    Util.addClass = function(el, className) {
        var classList = className.split(' ');
        el.classList.add(classList[0]);
        if (classList.length > 1) Util.addClass(el, classList.slice(1).join(' '));
    };

    Util.addClass = function(el, className) {
        var classList = className.split(' ');
        el.classList.add(classList[0]);
        if (classList.length > 1) Util.addClass(el, classList.slice(1).join(' '));
    };

    Util.removeClass = function(el, className) {
        var classList = className.split(' ');
        el.classList.remove(classList[0]);
        if (classList.length > 1) Util.removeClass(el, classList.slice(1).join(' '));
    };

    Util.toggleClass = function(el, className, bool) {
        if(bool) Util.addClass(el, className);
        else Util.removeClass(el, className);
    };

    Util.moveFocus = function (element) {
        if( !element ) element = document.getElementsByTagName('body')[0];
        element.focus();
        if (document.activeElement !== element) {
            element.setAttribute('tabindex','-1');
            element.focus();
        }
    };


    Util.getIndexInArray = function(array, el) {
        return Array.prototype.indexOf.call(array, el);
    };


    // File#: _1_language-picker
    // Usage: codyhouse.co/license
    (function() {
        var LanguagePicker = function(element) {
            this.element = element;
            this.select = this.element.getElementsByTagName('select')[0];
            this.options = this.select.getElementsByTagName('option');
            this.selectedOption = getSelectedOptionText(this);
            this.pickerId = this.select.getAttribute('id');
            this.trigger = false;
            this.dropdown = false;
            this.firstLanguage = false;
            // dropdown arrow inside the button element
            this.arrowSvgPath = '<svg viewBox="0 0 16 16"><polygon points="3,5 8,11 13,5 "></polygon></svg>';
            this.globeSvgPath = '<svg viewBox="0 0 16 16"><path d="M8,0C3.6,0,0,3.6,0,8s3.6,8,8,8s8-3.6,8-8S12.4,0,8,0z M13.9,7H12c-0.1-1.5-0.4-2.9-0.8-4.1 C12.6,3.8,13.6,5.3,13.9,7z M8,14c-0.6,0-1.8-1.9-2-5H10C9.8,12.1,8.6,14,8,14z M6,7c0.2-3.1,1.3-5,2-5s1.8,1.9,2,5H6z M4.9,2.9 C4.4,4.1,4.1,5.5,4,7H2.1C2.4,5.3,3.4,3.8,4.9,2.9z M2.1,9H4c0.1,1.5,0.4,2.9,0.8,4.1C3.4,12.2,2.4,10.7,2.1,9z M11.1,13.1 c0.5-1.2,0.7-2.6,0.8-4.1h1.9C13.6,10.7,12.6,12.2,11.1,13.1z"></path></svg>';

            initLanguagePicker(this);
            initLanguagePickerEvents(this);

        };

        function initLanguagePicker(picker) {
            // create the HTML for the custom dropdown element
            picker.element.insertAdjacentHTML('beforeend', initButtonPicker(picker) + initListPicker(picker));

            // save picker elements
            picker.dropdown = picker.element.getElementsByClassName('language-picker__dropdown')[0];
            picker.languages = picker.dropdown.getElementsByClassName('language-picker__item');
            picker.firstLanguage = picker.languages[0];
            picker.trigger = picker.element.getElementsByClassName('language-picker__button')[0];
        };

        function initLanguagePickerEvents(picker) {
            // make sure to add the icon class to the arrow dropdown inside the button element
            var svgs = picker.trigger.getElementsByTagName('svg');
            Util.addClass(svgs[0], 'icon');
            Util.addClass(svgs[1], 'icon');
            // language selection in dropdown
            // ⚠️ Important: you need to modify this function in production
            initLanguageSelection(picker);

            // click events
            picker.trigger.addEventListener('click', function(){
                toggleLanguagePicker(picker, false);
            });
            // keyboard navigation
            picker.dropdown.addEventListener('keydown', function(event){
                if(event.keyCode && event.keyCode == 38 || event.key && event.key.toLowerCase() == 'arrowup') {
                    keyboardNavigatePicker(picker, 'prev');
                } else if(event.keyCode && event.keyCode == 40 || event.key && event.key.toLowerCase() == 'arrowdown') {
                    keyboardNavigatePicker(picker, 'next');
                }
            });
        };

        function toggleLanguagePicker(picker, bool) {
            var ariaExpanded;
            if(bool) {
                ariaExpanded = bool;
            } else {
                ariaExpanded = picker.trigger.getAttribute('aria-expanded') == 'true' ? 'false' : 'true';
            }
            picker.trigger.setAttribute('aria-expanded', ariaExpanded);
            if(ariaExpanded == 'true') {
                picker.firstLanguage.focus(); // fallback if transition is not supported
                picker.dropdown.addEventListener('transitionend', function cb(){
                    picker.firstLanguage.focus();
                    picker.dropdown.removeEventListener('transitionend', cb);
                });
                // place dropdown
                placeDropdown(picker);
            }
        };

        function placeDropdown(picker) {
            var triggerBoundingRect = picker.trigger.getBoundingClientRect();
            Util.toggleClass(picker.dropdown, 'language-picker__dropdown--right', (window.innerWidth < triggerBoundingRect.left + picker.dropdown.offsetWidth));
            Util.toggleClass(picker.dropdown, 'language-picker__dropdown--up', (window.innerHeight < triggerBoundingRect.bottom + picker.dropdown.offsetHeight));
        };

        function checkLanguagePickerClick(picker, target) { // if user clicks outside the language picker -> close it
            if( !picker.element.contains(target) ) toggleLanguagePicker(picker, 'false');
        };

        function moveFocusToPickerTrigger(picker) {
            if(picker.trigger.getAttribute('aria-expanded') == 'false') return;
            if(document.activeElement.closest('.language-picker__dropdown') == picker.dropdown) picker.trigger.focus();
        };

        function initButtonPicker(picker) { // create the button element -> picker trigger
            // check if we need to add custom classes to the button trigger
            var customClasses = picker.element.getAttribute('data-trigger-class') ? ' '+picker.element.getAttribute('data-trigger-class') : '';

            var button = '<button class="language-picker__button'+customClasses+'" aria-label="'+picker.select.value+' '+picker.element.getElementsByTagName('label')[0].textContent+'" aria-expanded="false" aria-controls="'+picker.pickerId+'-dropdown">';
            button = button + '<span aria-hidden="true" class="language-picker__label language-picker__flag language-picker__flag--'+picker.select.value+'">'+picker.globeSvgPath+'<em class="not-italic">'+picker.selectedOption+'</em>';
            button = button +picker.arrowSvgPath+'</span>';
            return button+'</button>';
        };

        function initListPicker(picker) { // create language picker dropdown
            var list = '<div class="language-picker__dropdown" aria-describedby="'+picker.pickerId+'-description" id="'+picker.pickerId+'-dropdown">';
            list = list + '<p class="sr-only" id="'+picker.pickerId+'-description">'+picker.element.getElementsByTagName('label')[0].textContent+'</p>';
            list = list + '<ul class="language-picker__list" role="listbox">';
            for(var i = 0; i < picker.options.length; i++) {
                var selected = picker.options[i].selected ? ' aria-selected="true"' : '',
                    language = picker.options[i].getAttribute('lang');
                list = list + '<li><a lang="'+language+'" hreflang="'+language+'" href="'+getLanguageUrl(picker.options[i])+'"'+selected+' role="option" data-value="'+picker.options[i].value+'" class="language-picker__item language-picker__flag language-picker__flag--'+picker.options[i].value+'"><span>'+picker.options[i].text+'</span></a></li>';
            };
            return list;
        };

        function getSelectedOptionText(picker) { // used to initialize the label of the picker trigger button
            var label = '';
            if('selectedIndex' in picker.select) {
                label = picker.options[picker.select.selectedIndex].text;
            } else {
                label = picker.select.querySelector('option[selected]').text;
            }
            return label;
        };

        function getLanguageUrl(option) {
            // ⚠️ Important: You should replace this return value with the real link to your website in the selected language
            // option.value gives you the value of the language that you can use to create your real url (e.g, 'english' or 'italiano')
            return '/language/' + option.value;
        };

        function initLanguageSelection(picker) {
            picker.element.getElementsByClassName('language-picker__list')[0].addEventListener('click', function(event){
                var language = event.target.closest('.language-picker__item');
                if(!language) return;

                if(language.hasAttribute('aria-selected') && language.getAttribute('aria-selected') == 'true') {
                    // selecting the same language
                    event.preventDefault();
                    picker.trigger.setAttribute('aria-expanded', 'false'); // hide dropdown
                } else {
                    // ⚠️ Important: this 'else' code needs to be removed in production.

                }
            });
        };

        function keyboardNavigatePicker(picker, direction) {
            var index = Util.getIndexInArray(picker.languages, document.activeElement);
            index = (direction == 'next') ? index + 1 : index - 1;
            if(index < 0) index = picker.languages.length - 1;
            if(index >= picker.languages.length) index = 0;
            Util.moveFocus(picker.languages[index]);
        };

        //initialize the LanguagePicker objects
        var languagePicker = document.getElementsByClassName('js-language-picker');
        if( languagePicker.length > 0 ) {
            var pickerArray = [];
            for( var i = 0; i < languagePicker.length; i++) {
                (function(i){pickerArray.push(new LanguagePicker(languagePicker[i]));})(i);
            }

            // listen for key events
            window.addEventListener('keyup', function(event){
                if( event.keyCode && event.keyCode == 27 || event.key && event.key.toLowerCase() == 'escape' ) {
                    // close language picker on 'Esc'
                    pickerArray.forEach(function(element){
                        moveFocusToPickerTrigger(element); // if focus is within dropdown, move it to dropdown trigger
                        toggleLanguagePicker(element, 'false'); // close dropdown
                    });
                }
            });
            // close language picker when clicking outside it
            window.addEventListener('click', function(event){
                pickerArray.forEach(function(element){
                    checkLanguagePickerClick(element, event.target);
                });
            });
        }

    }());


</script>

</html>
