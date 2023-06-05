<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200"> 
                    <form method="POST" action="/dashboard/update/submit/{{ $products->code_product}}" enctype="multipart/form-data">
                        @csrf
                        {{-- for user name --}}
                        <div class="pt-5 pb-3">
                            <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                            <input value ="{{ $products->username }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="username" id="username" readonly>
                        </div>
                        {{-- code product --}}
                        <div class="pb-3">
                            <label for="code_product" class="block text-gray-700 text-sm font-bold mb-2">Code Product</label>
                            <input value="{{ $products->code_product }} " class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="code_product" id="code_product" placeholder="code_product" readonly>
                        </div>
                        {{-- name --}}
                        <div class="pb-3">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Work Name</label>
                            <input value="{{ $products->name }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="name" id="name" placeholder="Name">
                        </div>
                        {{-- Number of Revision --}}
                        <div class="pb-3">
                            <label for="numberRevision" class="block text-gray-700 text-sm font-bold mb-2">Number of Revision</label>
                            <input value="{{ $products->numberRevision }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="numberRevision" id="numberRevision" placeholder="Number of Revision">
                        </div>
                        {{-- price --}}
                        <div class="pb-3">
                            <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price</label>
                            <input value="{{ $products->price}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="number" name="price" id="price" placeholder="price">
                        </div>
                        {{-- description --}}
                        <div class="pb-3">
                            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                            <input value="{{ $products->description}}" class="appearance-none block w-full h-100 bg-gray-200 text-gray-700 border rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="description" id="description">
                        </div>
                        {{-- category --}}
                        <div class="pb-3">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Category</label>
                            <select name="category" class="form-control w-full mt-1 rounded-md text-black">
                                <option name="category" class="text-black" value="anime">Anime</option>
                                <option name="category" class="text-black" value="cartoon">Cartoon</option>
                                <option name="category" class="text-black" value="digitalpainting">Digital Painting</option>
                                <option name="category" class="text-black" value="chibi">Chibi</option>
                                <option name="category" class="text-black" value="comic">Comic</option>
                            </select>
                        </div>
                        {{-- image --}}
                        <div class="pt-3 pb-3">     
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="image_product">Upload file</label>
                            <input accept="image/*" name="image_product" class="block w-full h-13 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="image_product" type="file">
                            <img id="preview" src="#" alt="your image" class="mt-3" style="display:none;"/>
                        </div>
                        <div class="pt-3 pb-3">
                            <button type="submit" class="bg-gray-800 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-md">
                                UPDATE
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>