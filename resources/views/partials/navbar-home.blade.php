@section('navbar-home')
<div class="overflow-hidden bg-white">
    <div class="">
        <div class="">
            <div class="flex items-center justify-between border-b border-gray-800 py-4 w-screen px-24">
                <div>
                    <div class="" role="img" aria-label="luxe. Logo.">
                        <img class="h-9" src="{{ asset('images\soalogo.png') }}" alt="logo">
                    </div>
                </div>
                <div class="hidden md:block">
                    <ul class="flex items-center space-x-6">
                        <li>
                            <a href="{{ route('home') }}" class="dark:hover:text-gray-1000 text-base text-right text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline"> Home </a>
                        </li>
                        <li>
                            <a href="{{ route('browser') }}" class="dark:hover:text-gray-1000 text-base text-right text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline"> Browse </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="dark:hover:text-gray-1000 text-base text-right text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline"> Seller </a>
                        </li>
                        <li>
                            <a href="/chat/1" class="dark:hover:text-gray-1000 text-base text-right text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline"> Contact us </a>
                        </li>
                    </ul>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    @if(Route::has('login'))
                        @auth
                            <a aria-label="my account" href="{{ url('/dashboard') }}" class="focus:outline-none focus:ring-2 focus:ring-gray-800 hover:bg-gray-100 p-0.5 rounded">
                                <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg2.svg" alt="account">
                            </a>
                            <a aria-label="Favourites" href="javascript:void(0)" class="focus:outline-none focus:ring-2 focus:ring-gray-800 hover:bg-gray-100 p-0.5 rounded">
                                <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg3.svg" alt="Favourites">
                            </a>
                        @else
                    <label for="my-modal-3" class="btn text-white">Get Started</label>
                    <!-- Put this part before </body> tag -->
                    <input type="checkbox" id="my-modal-3" class="modal-toggle" />
                        <div class="modal">
                            <div class="modal-box relative">
                                <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                    <h3 class="text-lg font-bold pb-5 text-white text-center">Sign up or Login</h3>
                                <div class="flex flex-col space-y-2">
                                    <button value="Click" type="button" onclick="window.location.href='{{ route('register') }}'" class="btn btn-xs sm:btn-sm md:btn-md lg:btn-lg text-white">Sign up</button>
                                    <button class="btn btn-xs sm:btn-sm md:btn-md lg:btn-lg text-white" value="Click" type="button" onclick="window.location.href='{{ route('login') }}'">Login</button>
                                </div>
                            </div>
                        </div>
                        @endauth
                    @endif
                    </div>
                </div>

                <div class="md:hidden">
                    <button aria-label="open menu" onclick="openMenu()" class="focus:outline-none focus:ring-2 focus:ring-gray-800 rounded">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg5.svg" alt="toggler">
                        <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg5dark.svg" alt="toggler">
                    </button>
                </div>
            </div>
            <div class="mt-4 pb-4 flex border-b border-gray-800 w-screen px-24">
                <div>
                    <img class=" pt-2 pr-2" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg6.svg" alt="Search">
                </div>
                <input type="text" placeholder="Search for products" class="focus:outline-none bg-transparent text-sm text-gray-600" />
            </div>
        </div>
        <div id="mobile-menu" class=" dark:bg-white md:hidden absolute inset-0 z-10 flex flex-col w-full h-screen bg-white pt-6">
            <div class="w-full">
                <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700 pb-3 mx-4">
                    <div role="img" aria-label="Luxe. Logo">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg1.svg" alt="logo">
                        <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg1dark.svg" alt="logo">
                    </div>
                    <button aria-label="close menu" onclick="closeMenu()" class="text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg7.svg" alt="logo">
                        <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg7dark.svg" alt="logo">
                    </button>
                </div>
            </div>
            <div class="mt-4 mx-4">
                <ul class="flex flex-col space-y-4">
                    <li class="border-b border-gray-200 dark:border-gray-700 dark:text-gray-700 pb-4 px-1 flex items-center justify-between">
                        <a href="javascript:void(0)" class="focus:outline-none focus:ring-2 focus:ring-gray-800 text-gray-800 hover:underline"> New </a>
                        <button aria-label="Add" class="dark:text-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                            <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                        </button>
                    </li>
                    <li class="border-b border-gray-200 dark:border-gray-700 dark:text-gray-700 pb-4 px-1 flex items-center justify-between">
                        <a href="javascript:void(0)" class="dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800 text-base text-gray-800 hover:underline"> Men </a>
                        <button aria-label="Add" class="dark:text-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                            <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                        </button>
                    </li>
                    <li class="border-b border-gray-200 dark:border-gray-700 dark:text-gray-700 pb-4 px-1 flex items-center justify-between">
                        <a href="javascript:void(0)" class="dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800 text-base text-gray-800 hover:underline"> Women </a>
                        <button aria-label="Add" class="dark:text-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                            <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                        </button>
                    </li>
                    <li class="border-b border-gray-200 dark:border-gray-700 dark:text-gray-700 pb-4 px-1 flex items-center justify-between">
                        <a href="javascript:void(0)" class="dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800 text-base text-gray-800 hover:underline"> Kids </a>
                        <button aria-label="Add" class="dark:text-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                            <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                        </button>
                    </li>
                    <li class="border-b border-gray-200 dark:border-gray-700 dark:text-gray-700 pb-4 px-1 flex items-center justify-between">
                        <a href="javascript:void(0)" class="dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800 text-base text-gray-800 hover:underline"> Magazine </a>
                        <button aria-label="Add" class="dark:text-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                            <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                        </button>
                    </li>
                </ul>
            </div>
            <div class="w-full h-full flex items-end">
                <ul class="bg-gray-50 dark:bg-gray-800 py-10 px-4 flex flex-col space-y-8 w-full">
                    <li>
                        <a class="flex items-center space-x-2 focus:outline-none text-gray-800 dark:text-white focus:ring-2 focus:ring-gray-800 hover:underline" href="javascript:void(0)">
                            <div>
                                <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg2.svg" alt="account">
                            </div>
                            <p class="text-base">My account</p>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center space-x-2 focus:outline-none text-gray-800 dark:text-white focus:ring-2 focus:ring-gray-800 hover:underline" href="javascript:void(0)">
                            <div>
                                <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg4.svg" alt="bag">
                            </div>
                            <p class="text-base">Bag</p>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center space-x-2 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline" href="javascript:void(0)">
                            <div>
                                <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg3.svg" alt="Favourites">
                            </div>
                            <p class="text-base">Favourites</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
