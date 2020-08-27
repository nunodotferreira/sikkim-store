@extends('layouts.store')

@section('content')
    <section class="bg-gradient-to-r from-teal-500 to-gray-600 flex items-center justify-center mb-8">
        <span class="uppercase font-normal py-2 text-gray-300 text-sm tracking-wider">{{$store}}'s Store</span>
    </section>
    <section class="container mx-auto max-w-6xl mx-auto mb-24">
        <div class="h-64 w-full bg-gray-100 flex items-center justify-center text-gray-400">Slideshow Here</div>
    </section>
    <section class="container mx-auto max-w-6xl mx-auto mb-24">
        <div class="grid grid-cols-4 gap-2">
            <a href="">
                <img src="{{ asset('storage/placeholders/categroy-banners-01.jpg') }}"
                     alt="">
            </a>

            <a href="">
                <img src="{{ asset('storage/placeholders/categroy-banners-03.jpg') }}"
                     alt="">
            </a>
            <a href="">
                <img src="{{ asset('storage/placeholders/pickles-banner-01.jpg') }}"
                     alt="">
            </a>
            <a href="">
                <img src="{{ asset('storage/placeholders/categroy-banners-04.jpg') }}"
                     alt="">
            </a>
        </div>
    </section>
    <section class="text-gray-700 bg-gray-50 mb-4">
        <div class="container max-w-6xl mx-auto pt-8 pb-6 flex items-center justify-between">
            <div class="flex flex-col text-left">
                <h1 class="text-lg font-medium title-font text-gray-700">Trending Posts</h1>
                <div class="w-12 h-0.5 bg-indigo-500 rounded mt-1"></div>
            </div>
            <a href=""
               class="text-green-600 inline-flex items-center border-b border-transparent hover:border-green-700">
                <span class="font-semibold text-sm tracking-wide">Shop all</span>
                <svg class="w-5 h-5 text-green-600"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20"
                     fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                          clip-rule="evenodd"/>
                </svg>
            </a>
        </div>
    </section>
    <section class="container max-w-6xl mx-auto mb-28">
        <div class="grid grid-cols-6 gap-0">
            <a href=""
               class="shadow flex items-center justify-between p-4 hover:bg-gray-100 transition ease-in-out duration-100">
                <div class="flex-col">
                    <p class="text-sm text-gray-600">Tea</p>
                    <p class="text-sm text-gray-400">69 items</p>
                </div>
                <img src="{{ asset('storage/placeholders/tea.jpg') }}"
                     class="w-16"
                     alt="Tea">
            </a>
            <a href=""
               class="shadow flex items-center justify-between p-4 hover:bg-gray-100 transition ease-in-out duration-100">
                <div class="flex-col">
                    <p class="text-sm text-gray-600">Immunity Booster</p>
                    <p class="text-sm text-gray-400">73 items</p>
                </div>
                <img src="{{ asset('storage/placeholders/immunity.jpg') }}"
                     class="w-16"
                     alt="Immunity Booster">
            </a>
            <a href=""
               class="shadow flex items-center justify-between p-4 hover:bg-gray-100 transition ease-in-out duration-100">
                <div class="flex-col">
                    <p class="text-sm text-gray-600">Vegetable Pickles</p>
                    <p class="text-sm text-gray-400">53 items</p>
                </div>
                <img src="{{ asset('storage/placeholders/pickles.jpg') }}"
                     class="w-16"
                     alt="Vegetable Pickles">
            </a>
            <a href=""
               class="shadow flex items-center justify-between p-4 hover:bg-gray-100 transition ease-in-out duration-100">
                <div class="flex-col">
                    <p class="text-sm text-gray-600">Chillies</p>
                    <p class="text-sm text-gray-400">32 items</p>
                </div>
                <img src="{{ asset('storage/placeholders/chilli.jpg') }}"
                     class="w-16"
                     alt="Chillies">
            </a>
            <a href=""
               class="shadow flex items-center justify-between p-4 hover:bg-gray-100 transition ease-in-out duration-100">
                <div class="flex-col">
                    <p class="text-sm text-gray-600">Chocolates</p>
                    <p class="text-sm text-gray-400">9 items</p>
                </div>
                <img src="{{ asset('storage/placeholders/chocolate.jpg') }}"
                     class="w-16"
                     alt="Chocolates">
            </a>
            <a href=""
               class="shadow flex items-center justify-between p-4 hover:bg-gray-100 transition ease-in-out duration-100">
                <div class="flex-col">
                    <p class="text-sm text-gray-600">Herbal</p>
                    <p class="text-sm text-gray-400">29 items</p>
                </div>
                <img src="{{ asset('storage/placeholders/chocolate.jpg') }}"
                     class="w-16"
                     alt="Herbal">
            </a>
        </div>
    </section>
    <section class="text-gray-700 bg-gray-50 mb-4">
        <div class="container max-w-6xl mx-auto pt-8 pb-6 flex items-center justify-between">
            <div class="flex flex-col text-left">
                <h1 class="text-lg font-medium title-font text-gray-700">Recommendations</h1>
                <div class="w-12 h-0.5 bg-indigo-500 rounded mt-1"></div>
            </div>
            <a href=""
               class="text-green-600 inline-flex items-center border-b border-transparent hover:border-green-700">
                <span class="font-semibold text-sm tracking-wide">Shop all</span>
                <svg class="w-5 h-5 text-green-600 mt-0.5"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20"
                     fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                          clip-rule="evenodd"/>
                </svg>
            </a>
        </div>
    </section>
    <section>
        <div class="container max-w-6xl mx-auto mb-24">
            <div class="recent-products grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mb-12">
                @foreach(range(1, 8) as $product)
                    <div class="shadow rounded-sm bg-white h-full">
                        <a href="{{ '' }}"
                           class="block relative md:h-48 h-80  overflow-hidden hover:opacity-75">
                            <img alt="ecommerce"
                                 class="object-cover object-center w-full h-full block"
                                 src="{{ asset('storage/placeholders/product1.jpg') }}">
                        </a>
                        <div class="mt-3 px-6 md:px-4 pb-2 flex-col h-full">
                            <h2 class="text-gray-700 text-sm font-normal flex-1">{{ 'Purezza Activated Charcoal & Peppermint Soap- 100g' }} </h2>
                            <p class="mt-1 font-medium text-green-600">{{ '₹ '.number_format(2000 / 100) }}</p>
                            <h3 class="text-gray-500 text-sm tracking-widest title-font my-1 line-through">MRP:
                                300.00</h3>
                        </div>
                        <div class="flex items-center justify-center space-x-6 md:hidden">
                            <div class="w-6 h-0.5  bg-indigo-500 rounded my-2"></div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="flex w-full justify-center">
                <a href="{{ '' }}"
                   class="px-6 py-2 bg-green-700 hover:bg-green-500 text-white rounded-md text-sm">See More
                </a>
            </div>
        </div>
    </section>
    <section class="text-gray-700 bg-gray-50 mb-4">
        <div class="container max-w-6xl mx-auto pt-8 pb-6 flex items-center justify-between">
            <div class="flex flex-col text-left">
                <h1 class="text-lg font-medium title-font text-gray-700">Your Recently Viewed</h1>
                <div class="w-12 h-0.5 bg-indigo-500 rounded mt-1"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="container max-w-6xl mx-auto mb-32">
            <div class="flex w-full h-52 justify-center items-center">
                <h3 class="flex">Nothing here, take me
                    <a href=""
                       class="ml-2 text-green-600 flex items-center hover:underline">
                        shopping
                        <svg class="w-5 h-5 text-green-600 mt-0.5"
                             xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>
                </h3>
            </div>
        </div>
    </section>
@endsection
