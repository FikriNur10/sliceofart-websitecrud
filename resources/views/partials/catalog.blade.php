@section('catalog')
<div class="2xl:container flex justify-center items-center w-full 2xl:mx-auto lg:px-20 md:py-12 md:px-6 py-9 px-4">
    <div class="w-70 md:w-auto grid lg:grid-cols-5 grid-cols-1 lg:gap-5 gap-6">
        <div class="relative group">
            <img class="lg:block hidden w-full" src="{{ asset('images\gambar-4.png') }}" alt="Women" />
            <img class="lg:hidden md:block hidden w-full" src="{{ asset('images\gambar-1.png') }}" alt="Women" />
            <img class="w-full md:hidden" src="{{ asset('images\gambar-1.png') }}" alt="Women" />

            <div class="opacity-0 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full"></div>
            <div class="absolute top-0 left-0 w-full h-full flex justify-start items-end opacity-0 hover:opacity-100 p-8">
                <button class="font-semibold text-2xl leading-6 text-white">Painting</button>
            </div>
        </div>
        <div class="relative group">
            <img class="lg:block hidden w-full" src="{{ asset('images\gambar-2.png') }}" alt="Women" />
            <img class="lg:hidden md:block hidden w-full" src="{{ asset('images\gambar-2.png') }}" alt="Women" />
            <img class="w-full md:hidden" src="{{ asset('images\gambar-2.png') }}" alt="Women" />

            <div class="opacity-0 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full"></div>
            <div class="absolute top-0 left-0 w-full h-full flex justify-start items-end opacity-0 hover:opacity-100 p-8">
                <button class="font-semibold text-2xl leading-6 text-white">Anime</button>
            </div>
        </div>

        <div class="lg:px-6 lg:py-0 md:py-16 md:px-24 py-16 px-16 flex flex-col justify-center items-center text-center bg-gray-100 dark:bg-gray-800">
            <h2 class="dark:text-white font-semibold lg:text-2xl text-2xl lg:leading-7 leading-9 text-gray-800 lg:w-full md:w-7/12 w-full">Shop your Favourite Designers</h2>
            <p class="dark:text-gray-300 font-medium text-base leading-5 text-gray-600 mt-4 lg:w-full md:w-7/12 w-full">We offer a huge colletion of premium clothing that are crafted with excellence for our adored customers</p>
            <button class="dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 hover:bg-gray-700 text-white text-base leading-4 bg-gray-800 lg:px-10 py-4 lg:w-auto w-62 mt-16">Discover More</button>
        </div>

        <div class="relative group">
            <img class="lg:block hidden w-full" src="{{ asset('images\gambar-3.png') }}" alt="Man" />
            <img class="lg:hidden md:block hidden w-full" src="{{ asset('images\gambar-3.png') }}" alt="Man" />
            <img class="w-full md:hidden" src="{{ asset('images\gambar-3.png') }}" alt="Man" />

            <div class="opacity-0 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full"></div>
            <div class="absolute top-0 left-0 w-full h-full flex justify-start items-end opacity-0 hover:opacity-100 p-8">
                <button class="font-semibold text-2xl leading-6 text-white">Chibi</button>
            </div>
        </div>
        <div class="relative group">
            <img class="lg:block hidden w-full" src="{{ asset('images\gambar-1.png') }}" alt="Man" />
            <img class="lg:hidden md:block hidden w-full" src="{{ asset('images\gambar-1.png') }}" alt="Man" />
            <img class="w-full md:hidden" src="{{ asset('images\gambar-1.png') }}" alt="Man" />

            <div class="opacity-0 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full"></div>
            <div class="absolute top-0 left-0 w-full h-full flex justify-start items-end opacity-0 hover:opacity-100 p-8">
                <button class="font-semibold text-2xl leading-6 text-white">Comic</button>
            </div>
        </div>
    </div>
</div>



