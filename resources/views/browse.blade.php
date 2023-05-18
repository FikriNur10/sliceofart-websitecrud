<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('./resources/css/app.css')
  @vite('./resources/js/app.js')
  {{-- Backup link --}}
  <script type="module" src="./resources/js/app.js"></script>
  <script type="module" src="./resources/css/app.css"></script>
  <title>{{ $title }} | SOA</title>


</head>
  <body class="bg-white">
    {{-- Navbar --}}
    <nav>
      @include('partials.navbar-home')
    </nav>
    {{-- headline --}}
    <div class="2xl:container 2xl:mx-auto">
        <div class="bg-white text-center lg:py-10 md:py-8 py-6">
            <p class="w-10/12 mx-auto md:w-full font-semibold lg:text-4xl text-3xl lg:leading-9 md:leading-7 leading-9 text-center text-gray-800">Summer Collection Vol-1</p>
        </div>
        <div class="py-6 lg:px-20 md:px-6 px-4">
            <p class="font-normal text-sm leading-3 text-gray-800">Home / {{ $title }}</p>
            <hr class="w-full bg-gray-200 my-6" />

            <div class="flex justify-between items-center">
                <div class="flex space-x-3 justify-center items-center text-gray-800">
                  <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-5-svg1.svg" alt="toggler">
                  <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-5-svg1dark.svg" alt="toggler">
                    <p class="font-normal text-base leading-4 text-gray-800">Filter</p>
                </div>
                <p class="cursor-pointer hover:underline duration-100 font-normal text-base leading-4 text-gray-800">Showing 18 products</p>
            </div>
        <!-- ✅ Grid Section - Starts Here 👇 -->
    <section class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">
        <!--   ✅ Product card 1 - Starts Here 👇 -->
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="#">
            <img src="https://images.unsplash.com/photo-1646753522408-077ef9839300?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8NjZ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">
            <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
            <p class="text-lg font-bold text-black truncate block capitalize">Product Name</p>
            <div class="flex items-center">
                <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                <del>
                <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                </del>
                <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                </svg></div>
            </div>
            </div>
        </a>
        </div>
        <!--   🛑 Product card 1 - Ends Here  -->
    </section>
      
    {{-- Footer --}}
    <footer class="footer w-full pt-16">
      @include('partials.footer')
    </footer>
  </body>
</html>