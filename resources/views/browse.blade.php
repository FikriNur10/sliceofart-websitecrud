<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <title>{{ $title }} | SOA</title>


</head>
  <body class="bg-white">
    {{-- Navbar --}}
    <nav>
      @include('partials.navbar-home')
    </nav>
    {{-- headline --}}
    <div class="2xl:container 2xl:mx-auto">
        <div class="bg-white text-center lg:py-10 md:py-8 py-2">
            <p class="w-10/12 mx-auto md:w-full font-semibold lg:text-4xl text-3xl lg:leading-9 md:leading-7 leading-9 text-center text-gray-800">Slice of Art</p>
        </div>
        <div class="py-1 lg:px-20 md:px-6 px-4">
            <p class="font-normal text-sm leading-3 text-gray-800">Home / {{ $title }}</p>
            <hr class="w-full bg-gray-200 my-6" />
        </div>
            <div class="text-right px-16">
                <p class="cursor-pointer hover:underline duration-100 font-normal text-base leading-4 text-gray-800">Showing {{ count($products)}} products</p>
            </div>
    </div>
    <section class="w-full h-full">
      <!-- ✅ Grid Section - Starts Here 👇 -->
      <div class="w-fit grid grid-cols-1 lg:grid-cols-4 md:grid-cols-5 gap-y-20 gap-x-14 px-20 py-20">
          <!--   ✅ Product card 1 - Starts Here 👇 -->
          @foreach ($products as $product)
      <div class="w-82 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
          <a href="/browse/{{$product ->code_product}}">
              <img src="{{ asset('productsImage/'.$product ->image_product)}}" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
              <div class="px-4 py-3 w-72">
              <span class="text-gray-400 mr-3 uppercase text-xs">{{$product->username}}</span>
              <p class="text-lg font-bold text-black truncate block capitalize">{{ $product->name}}</p>
              <div class="flex items-center">
                  <p class="text-lg font-semibold text-black cursor-auto my-3">Rp.{{ $product->price}}</p>                 
                  <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                      <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                  </svg></div>
              </div>
              </div>
          </a>
      </div>
      @endforeach
  </div>
    </section>
      
  </body>
</html>