@extends('layouts.myapp')

@section('content')
    <div class="mt-16">
        <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-center text-gray-900 font-car">{{ __('Contact Us') }}</h2>
        <p class="mb-8 font-light text-center text-gray-500 font-car lg:mb-16 dark:text-gray-400 sm:text-xl">{{ __('Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.') }}</p>
    </div>
    <div class="flex md:flex-row flex-col justify-between max-w-screen-xl md:px-16 px-8 mx-auto gap-12 ">
        <div class="md:w-2/3 order-last md:order-first mb-12 mx-auto">
            <form action="#" class="space-y-8" id="contact-form">
                <div class="flex justify-between">
                    <div class="w-full mr-5">
                        <label for="first_name"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('First Name') }}</label>
                        <input type="text" id="first_name"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                               required>
                    </div>

                    <div class="w-full ">
                        <label for="last_name"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('Last Name') }}</label>
                        <input type="text" id="last_name"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                               required>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="w-full mr-5">
                        <label for="email"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('Email') }}</label>
                        <input type="email" id="email"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                               required>
                    </div>

                    <div class="w-full ">
                        <label for="phone"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('Phone Number') }}</label>
                        <input type="text" id="phone"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                               required>
                    </div>
                </div>
                <div>
                    <label for="subject"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('Subject') }}</label>
                    <select name="subject" id="subject"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light">
                        <option value="0" disabled selected>{{ __('Select subject') }}</option>
                        <option value="reservation">{{ __('Reservation') }}</option>
                        <option value="payment">{{ __('Payment') }}</option>
                        <option value="car_problem">{{ __('Car Problem') }}</option>
                        <option value="cancelation">{{ __('Cancellation') }}</option>
                        <option value="other">{{ __('Other') }}</option>
                    </select>
                </div>
                <div class="sm:col-span-2">
                    <label for="message"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">{{ __('Your message') }}</label>
                    <textarea id="message" rows="6"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                              placeholder="{{ __('Leave a comment...') }}"></textarea>
                </div>
                <button type="submit"
                        class="p-3 mb-16 font-bold border rounded-md border-pr-400 text-pr-400 hover:text-white hover:bg-pr-400">{{ __('Send message') }}</button>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            function showPopup() {
                alert('{{ __('Thank you! We have received your message.') }}');
            }

            $('#contact-form').submit(function (e) {
                e.preventDefault();

                showPopup();

            });
        });
    </script>
@endsection