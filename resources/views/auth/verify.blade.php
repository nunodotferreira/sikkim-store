@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full">
            <div class="relative">
                @if (session('resent'))
                    <div id="toast"
                         class="w-full p-3 pr-6 md:pr-16 text-xs md:text-sm text-center md:text-center md:rounded-md text-white bg-green-600 fixed top-16 right-0 md:top-32 md:right-5 md:max-w-md focus:outline-none md:shadow-sm">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                        <div class="absolute top-0 right-0 my-5  mr-4 cursor-pointer">
                            <i class="fas fa-times text-gray-800 hover:text-gray-300 fa-lg"></i>
                        </div>
                    </div>
                @endif
                <a href="{{ route('index') }}">
                    <x-logo class="mx-auto h-20 w-20 overflow-hidden object-cover rounded-full shadow"></x-logo>
                </a>
                <h2 class="mt-2 md:mt-6 text-center text-lg font-normal md:text-2xl leading-9 md:font-normal text-gray-900">
                    Email Verification.
                </h2>
                <p class="mt-2 text-center text-sm md:text-lg leading-6 text-gray-700">
                    <span class="text-gray-800 font-semibold">{{ auth()->user()->name.',' }}</span>
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('You know the drill, just to make sure you own that email.') }}
                    {{ __('If you did not receive the email') }},
                </p>
                <form class="text-center mt-3"
                      method="POST"
                      action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit"
                            class="text-sm md:text-lg text-center text-green-600 hover:text-green-500">
                        {{ __('Click here to request another') }}
                    </button>
                    .
                </form>
            </div>
        </div>
    </div>
    <script>
        $("#toast").delay(8000).fadeOut(500);
    </script>
@endsection
