@section('hero')
<div class="bg-white">
    <div class="container mx-auto">
      <div class="relative py-10">
        <img
          src="{{ asset('images\slide1.png') }}"
          alt="A work table with house plants"
          role="img"
          class="w-screen h-full hidden lg:block"
        />
        <img
          src="https://i.ibb.co/94jQFsV/bench-accounting-nvzv-OPQW0gc-unsplash-1-1.png"
          alt="A work table with house plants"
          role="img"
          class="hidden sm:block lg:hidden w-full h-full"
        />
        <img
          src="https://i.ibb.co/cJz8LZ2/bench-accounting-nvzv-OPQW0gc-unsplash-1-1.png"
          alt="A work table with house plants"
          role="img"
          class="sm:hidden w-full h-full"
        />

        <div class="absolute z-10 top-0 left-0 mx-4 sm:mx-0 mt-36 sm:mt-0 sm:py-20 md:py-28 lg:py-20 xl:py-28 sm:pl-14 flex flex-col sm:justify-start items-start">
          
          <a href="/browse" type="button" class="hidden sm:flex bg-gray-800 py-4 px-8 text-base ml-6 font-medium text-white mt-150 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 hover:bg-gray-700">
            Explore
          </a>
        </div>
        <button
          class="absolute bottom-0 sm:hidden dark:bg-white dark:text-gray-800 bg-gray-800 py-4 text-base font-medium text-white mt-8 flex justify-center items-center w-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 hover:bg-gray-700"
        >
          Explore
        </button>
      </div>
    </div>
  </div>
