@if (session('failed'))
    <div class="fixed top-0 mt-20 w-full mr-4 flex items-center justify-center">
        <div id="toast"
             class="text-center text-white bg-red-600  px-6 py-3 rounded-full text-sm">
            {{ session('failed')}}
        </div>
    </div>
@endif

@if (session('status'))
    <div class="fixed top-0 mt-20 w-full mr-4 flex items-center justify-center">
        <div id="toast"
             class="text-center text-white bg-green-600  px-6 py-3 rounded-full text-sm">
            {{ session('status')}}
        </div>
    </div>
@endif
