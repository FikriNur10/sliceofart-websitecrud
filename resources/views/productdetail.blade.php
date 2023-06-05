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
@csrf
<body class="bg-white">   
        <nav>
            @include('partials.navbar-home')
        </nav>
        <section class="h-full w-full">
                <div class="md:flex items-start justify-center py-12 2xl:px-20 md:px-6 px-4">
                    <div class="xl:w-2/6 lg:w-2/5 w-80 md:block hidden">
                        <img class="w-full" alt="image of a girl posing" src="{{ asset('productsImage/'.$products ->image_product)}}" />
                    </div> 
                    <div class="md:hidden">
                        <img class="w-full" alt="image of a girl posing" src="https://i.ibb.co/QMdWfzX/component-image-one.png" />
                        <div class="flex items-center justify-between mt-3 space-x-4 md:space-x-0">
                            <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/cYDrVGh/Rectangle-245.png" />
                            <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/f17NXrW/Rectangle-244.png" />
                            <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/cYDrVGh/Rectangle-245.png" />
                            <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/f17NXrW/Rectangle-244.png" />
                        </div>
                    </div>
                    <div class="xl:w-2/5 md:w-1/2 lg:ml-8 md:ml-6 md:mt-0 mt-6">
                        {{-- head --}}
                        <div class="border-b border-gray-200 pb-6">
                            <p class="text-sm leading-none text-gray-800">Slice of Art</p>
                            <h1 class="lg:text-2xl text-xl font-semibold lg:leading-6 leading-7 text-black mt-2">{{$products->name}}</h1>
                        </div>
                        <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                            <p class="text-base leading-4 text-gray-800">Artist</p>
                            <div class="flex items-center justify-center">
                                <p class="text-sm leading-none text-gray-600 mr-3">{{ $products->username}}</p>  
                            </div>
                        </div>
                        <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                            <p class="text-base leading-4 text-gray-800">Category</p>
                            <div class="flex items-center justify-center">
                                <p class="text-sm leading-none text-gray-600 mr-3">{{ $products->category}}</p>  
                            </div>
                        </div>
                        <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                            <p class="text-base leading-4 text-gray-800">Number of Revision</p>
                            <div class="flex items-center justify-center">
                                <p class="text-sm leading-none text-gray-600 mr-3">{{ $products->numberRevision}}</p>  
                            </div>
                        </div>
                        <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                            <p class="text-base leading-4 text-gray-800">Start From</p>
                            <div class="flex items-center justify-center">
                                <p class="text-sm leading-none text-gray-600 mr-3">Rp.{{ $products->price}}</p>  
                            </div>
                        </div>
                        <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                            <div class="flex items-center justify-center">
                                <p class="text-sm leading-none text-gray-600 mr-3">{{ $products->description}}</p>  
                            </div>
                        </div>
                        <a type="button" href="/chat/{{$user->id}}" class="mt-6 focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white bg-gray-800 w-full py-4 hover:bg-gray-500 focus:outline-none">
                            Order
                        </a>
                        
                    </div>
                </div>
        </section>
    </body>
</html>