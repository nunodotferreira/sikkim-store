@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-50 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full">
            <div>
                <a href="{{ route('index') }}">
                    <x-logo class="mx-auto h-20 w-20 overflow-hidden object-cover rounded-full shadow"></x-logo>
                </a>
                <h2 class="mt-6 text-center text-3xl leading-9 font-normal text-gray-900">
                    Create a new account.
                </h2>
                <p class="mt-2 text-center text-sm leading-5 text-gray-600">
                    Already have an account?
                    <a href="{{route('login')}}"
                       class="inline-flex items-center font-medium text-green-600 hover:text-green-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                        Login here
                        <svg class="w-5 h-5"
                             xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>
                </p>
            </div>
            <form class="mt-8"
                  action="{{ route('register') }}"
                  method="POST">
                @csrf
                <input type="hidden"
                       name="remember"
                       value="true"/>
                <div class="">
                    <div>
                        <div class="relative">
                            <input aria-label="Email address"
                                   name="email"
                                   type="email"
                                   value="{{ old('email') }}"
                                   required
                                   class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 @error('email'){{'border-red-500'}}@enderror placeholder-gray-500 text-gray-900  focus:outline-none focus:shadow-outline-blue focus:border-green-500 focus:z-10 sm:text-sm sm:leading-5"
                                   placeholder="Email address"/>
                        </div>
                        @error('email')
                        <span class="pl-2 text-xs text-red-600"><strong>{{$message}}</strong></span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <div class="relative">
                            <input aria-label="Password"
                                   name="password"
                                   type="password"
                                   required
                                   class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 @error('password'){{'border-red-500'}}@enderror placeholder-gray-500 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-green-500 focus:z-10 sm:text-sm sm:leading-5 relative"
                                   placeholder="Password"/>
                        </div>
                        @error('password')
                        <span class="pl-2 text-xs text-red-600"><strong>{{$message}}</strong></span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <div class="relative">
                            <input aria-label="Password Confirmation"
                                   name="password_confirmation"
                                   type="password"
                                   required
                                   class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 @error('password'){{'border-red-500'}}@enderror placeholder-gray-500 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-green-500 focus:z-10 sm:text-sm sm:leading-5 relative"
                                   placeholder="Confirm Password"/>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit"
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition duration-150 ease-in-out">
                        Create Account
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

