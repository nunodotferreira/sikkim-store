<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="description"
          content="Multi-Vendor, Multi-Tenant E-Commerce for Sikkim.">
    <meta name="keywords"
          content="E-Commerce, Online Shop, Store">
    <meta name="author"
          content="Ray Nirola">
    <title>Sikkim Store - Local Online Shop</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token"
          content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="stylesheet"
          href="{{ asset('fonts/inter/inter.css') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}"
          rel="stylesheet">
</head>
<body>
<header>
    @guest()
        @if(!request()->routeIs(['login', 'register', 'password.reset', 'password.request', 'password.confirm']))
            <nav x-data="{ open: false }"
                 class="bg-secondary-900">
                <div class="max-w-6xl mx-auto">
                    <div class="relative flex items-center justify-between py-6">
                        <div class="flex items-center sm:items-stretch sm:justify-start">
                            <a href="{{ env('APP_URL') }}"
                               class="flex items-center justify-between">
                                <div class="flex-shrink-0 mr-2  ml-0">
                                    <x-logo class="block lg:hidden h-16 w-16 overflow-hidden object-cover rounded-full shadow"></x-logo>
                                    <x-logo class="hidden lg:block h-16 w-16 overflow-hidden object-cover rounded-full shadow"></x-logo>
                                </div>
                            </a>
                        </div>
                        <div class="flex-1 flex items-center justify-center">
                            <form action=""
                                  class="w-3/5  relative">
                                <label>
                                    <input type="text"
                                           placeholder="I am shopping for.."
                                           class="py-3 px-4 bg-gray-200 rounded-sm w-full text-sm font-light placeholder-gray-600 tracking-wider focus:outline-none">
                                </label>
                                <button type="submit"
                                        class="absolute top-0 right-0 h-full w-20 flex items-center justify-center overflow-hidden bg-green-600 p-2 rounded-r-sm border border-gray-200 hover:bg-green-700">
                                    <svg class="w-5 h-5 text-gray-200"
                                         xmlns="http://www.w3.org/2000/svg"
                                         fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                    </svg>
                                </button>

                            </form>
                        </div>
                        <div class="space-x-6 flex items-center">
                            <a href="{{ route('login') }}"
                               class="py-1 md:py-2 text-sm font-light leading-5 text-gray-400 @if(request()->routeIs('login')) text-gray-200 @endif hover:text-gray-200  focus:outline-none focus:text-gray-400  transition duration-200 ease-in-out">Login
                                or Register</a>
                            <a href=""
                               class="inline-flex items-center text-green-400 hover:text-green-300">
                                <div class="relative">
                                    <svg class="w-6 h-6 mr-2"
                                         xmlns="http://www.w3.org/2000/svg"
                                         fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="1"
                                              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                    <div class="absolute top-0 left-0 -mt-3 ml-4 w-4 h-4 bg-green-900 border border-green-600 overflow-hidden rounded-full flex items-center justify-center">
                                        <span class="text-xs text-white"> 0 </span>
                                    </div>
                                </div>

                                <span class="text-gray-200">
                                    ₹ 0.00
                                </span>
                            </a>
                            <div x-data="{open: false}"
                                 class="relative">

                                <a href="{{ config('app.url') }}"
                                   @mouseover="open = true"
                                   @mouseleave="open = false">
                                    <svg class="w-5 h-5 text-red-500 hover:text-red-700"
                                         xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </a>

                                <!-- Popover -->
                                <!-- Make sure to add the requisite CSS for x-cloak: https://github.com/alpinejs/alpine#x-cloak -->

                                <div x-cloak
                                     x-show.transition="open"
                                     class="p-2 bg-gray-500 rounded shadow-2xl flex flex-col text-gray-300 mt-2 absolute z-20 -ml-24 -mr-2">
                                    <p class="text-xs">Go to main site.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <nav class="flex items-center justify-between text-gray-300 text-sm font-light py-3">
                            <button class="font-light flex items-center justify-center hover:text-gray-100">
                                <svg class="h-5 w-5 text-green-500 mr-2"
                                     xmlns="http://www.w3.org/2000/svg"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>
                                All Categories
                            </button>
                            <div class="flex-1 flex items-center justify-center space-x-6">
                                <a href=""
                                   class="hover:text-gray-100 @if( request()->routeIs('index')) font-medium text-white @endif">Home</a>
                                <a href=""
                                   class="hover:text-gray-100">Best Seller</a>
                                <a href=""
                                   class="hover:text-gray-100">Sell Online</a>
                                <a href=""
                                   class="hover:text-gray-100">Shops</a>
                                <a href=""
                                   class="hover:text-gray-100">Packaging</a>
                                <a href=""
                                   class="hover:text-gray-100">Vendor</a>
                            </div>
                            <div>
                                <button type="button"
                                        class="hover:text-gray-100 font-light">Recently Viewed
                                </button>
                            </div>
                        </nav>
                    </div>
                </div>
            </nav>
        @endif
    @endguest
    @auth()
        <nav class="bg-gray-50 shadow-md"
             x-data="{ open: false }">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                        <!-- Mobile menu button-->
                        <button @click="open = !open"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-800  focus:outline-none  focus:text-gray-500 transition duration-150 ease-in-out">
                            <!-- Icon when menu is closed. -->
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg x-state-on="Menu open"
                                 x-state:on="Menu open"
                                 x-state-off="Menu closed"
                                 x-state:off="Menu closed"
                                 :class="{ 'hidden': open, 'block': !open }"
                                 x-bind-class="{ 'hidden': open, 'block': !open }"
                                 class="block h-6 w-6"
                                 stroke="currentColor"
                                 fill="none"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                            <!-- Icon when menu is open. -->
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg x-state-on="Menu open"
                                 x-state:on="Menu open"
                                 x-state-off="Menu closed"
                                 x-state:off="Menu closed"
                                 :class="{ 'hidden': !open, 'block': open }"
                                 x-bind-class="{ 'hidden': !open, 'block': open }"
                                 class="hidden h-6 w-6"
                                 stroke="currentColor"
                                 fill="none"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    <div class="flex-1 flex items-center sm:items-stretch sm:justify-start">
                        <a href="{{ env('APP_URL') }}"
                           class="flex items-center justify-between">
                            <div class="flex-shrink-0 mr-2 ml-10 md:ml-0">
                                <x-logo class="block lg:hidden h-16 w-16 overflow-hidden object-cover rounded-full shadow"></x-logo>
                                <x-logo class="hidden lg:block h-16 w-16 overflow-hidden object-cover rounded-full shadow"></x-logo>
                            </div>
                        </a>
                        <div class="hidden sm:block sm:ml-6">
                            <div class="flex">
                                <a href="{{ ''  }}"
                                   class="px-3 py-2 rounded-md text-sm  leading-5 @if(request()->routeIs('index'))
                                       text-indigo-800 font-medium @else font-normal text-gray-500 @endif focus:outline-none focus:text-gray-500 hover:text-indigo-800 transition duration-150 ease-in-out">
                                    Home
                                </a>
                                <a href="{{ '' }}"
                                   class="px-3 py-2 rounded-md text-sm leading-5 @if(request()->routeIs('products.index'))
                                       text-indigo-800 font-medium @else font-normal text-gray-500 @endif focus:outline-none focus:text-gray-500 hover:text-indigo-800 transition duration-150 ease-in-out">
                                    Products
                                </a>
                                <a href="{{ '' }}"
                                   class="px-3 py-2 rounded-md text-sm leading-5 @if(request()->routeIs('categories.index'))
                                       text-indigo-800 font-medium @else font-normal text-gray-500 @endif focus:outline-none focus:text-gray-500 hover:text-indigo-800 transition duration-150 ease-in-out">
                                    Category
                                </a>
                                <a href="{{ '' }}"
                                   class="px-3 py-2 rounded-md text-sm leading-5 @if(request()->routeIs('contact'))
                                       text-indigo-800 font-medium @else font-normal text-gray-500 @endif focus:outline-none focus:text-gray-500 hover:text-indigo-800 transition duration-150 ease-in-out">
                                    Contact
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                        <a href=""
                           class="md:hidden mr-4  text-gray-400 focus:text-gray-500 hover:text-gray-800  focus:outline-none focus:text-gray-500  transition duration-150 ease-in-out">
                            <i class="fas fa-edit fill-current"></i>
                        </a>
                        <span class="md:pl-4 md:py-2 text-sm font-medium tracking-tight leading-5 text-gray-700 hidden md:block">
                            {{ auth()->user()->name }}
                        </span>

                        <!-- Profile dropdown -->
                        <div class="ml-3 relative"
                             x-data="{ isOpen: false }">
                            <div>
                                <button class="flex text-sm border border-gray-500 hover:border-indigo-800 rounded-full focus:outline-none  border-white focus:border-indigo-500 transition duration-150 ease-in-out"
                                        @click="isOpen = !isOpen">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                         src="{{'https://ui-avatars.com/api/?background=0D8ABC&color=fff&name='.auth()->user()->name}}"
                                         alt=""/>
                                </button>
                            </div>
                            <div x-show="isOpen"
                                 x-transition:enter="transition ease-out duration-100 transform"
                                 x-transition:enter-start="opacity-0 scale-95"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75 transform"
                                 x-transition:leave-start="opacity-100 scale-100"
                                 x-transition:leave-end="opacity-0 scale-95"
                                 @click.away="isOpen = false "
                                 @keydown.escape.window="isOpen = false"
                                 class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                                <div class="rounded-md bg-white shadow-md">
                                    <a href="{{ '' }}"
                                       class="block px-4 py-2 text-sm leading-5 text-gray-700 rounded-t-md hover:bg-indigo-500 hover:text-white focus:outline-none transition duration-150 ease-in-out">
                                        <i class="fas fa-user mr-4"></i> Your Profile </a>
                                    <a href="#"
                                       class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:text-white hover:bg-indigo-500 focus:outline-none transition duration-150 ease-in-out">
                                        <i class="fas fa-cog mr-4"></i>Settings</a>
                                    <form action="{{ '' }}"
                                          method="post">
                                        @csrf
                                        <button class="block w-full text-left px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-indigo-500 hover:text-white rounded-b-md focus:outline-none transition duration-150 ease-in-out">
                                            <i class="fas fa-sign-out-alt mr-4"></i>Sign out
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--Mobile Menus Drop Down
                Mobile menu, toggle classes based on menu state.
                Menu open: "block", Menu closed: "hidden"-->

            <div x-state:on="Menu open"
                 x-state:off="Menu closed"
                 :class="{ 'block': open, 'hidden': !open }"
                 class="hidden md:hidden">
                <div class="">
                    <a href="{{ '' }}"
                       class="block pt-2 pb-2 pl-6 text-xm text-sm font-medium text-gray-500 focus:outline-none focus:text-gray-500 focus:bg-indigo-500 transition duration-150 ease-in-out hover:text-indigo-800">Home</a>
                    <a href="{{ '' }}"
                       class="block pt-2 pb-2 pl-6 text-xm text-sm font-medium text-gray-500 focus:outline-none focus:text-gray-500 focus:bg-indigo-500 transition duration-150 ease-in-out hover:text-indigo-800">Products</a>
                    <a href="{{ '' }}"
                       class="block pt-2 pb-2 pl-6 text-xm text-sm font-medium text-gray-500 focus:outline-none focus:text-gray-500 focus:bg-indigo-500 transition duration-150 ease-in-out hover:text-indigo-800">Categories</a>
                    <a href="{{ '' }}"
                       class="block pt-2 pb-4 mb-4 pl-6 text-xm text-sm font-medium text-gray-500 focus:outline-none focus:text-gray-500 focus:bg-indigo-500 transition duration-150 ease-in-out hover:text-indigo-800">Contact</a>
                </div>
            </div>
        </nav>
    @endauth
</header>
<main>
    @yield('content')
</main>

<footer>

</footer>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"
        defer>
</script>
@yield('scripts')
</body>
</html>
