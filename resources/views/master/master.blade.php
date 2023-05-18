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
  <body>
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