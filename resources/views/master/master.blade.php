<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <title>{{ $title }} | SOA</title>


</head>
  <body>
    {{-- floating button --}}
    <button title="Chat" onclick="window.location.href='{{ route(config('chatify.routes.prefix')) }}'"
    class="fixed z-40 pb-3 bottom-10 right-8 bg-gray-800 w-20 h-20 rounded-full drop-shadow-lg flex justify-center items-center text-white text-4xl hover:bg-gray-500 hover:drop-shadow-2xl duration-300">&#9993;</button>
    {{-- Navbar --}}
    <nav>
      @include('partials.navbar-home')
    </nav>

    {{-- Hero --}}
    <section>
      @include('partials.hero')
    </section>
    
    {{-- Highlight Section --}}
    <section class="h-screen mx-auto py-100 bg-white">
      <div class="py-100">
        @include('partials.highlight')
      </div>
    </section>
    
    {{--  Catalog Section --}}
    <section class="bg-white mx-auto h-screen">
      <div class="py-10">
        @include('partials.catalog')
      </div>
    </section>

    {{-- Newsletter --}}
    <section class="bg-white h-screen">
      @include('partials.newsletter')
    </section>

    {{-- Footer --}}
    <footer class="footer bg-gray-800">
      @include('partials.footer')
    </footer>
  
  </body>
</html>