<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Data') }}
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="max-w-20xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- table --}}
                    <div class="overflow-x-auto bg-white" data-theme="lofi">
                        <table class="table w-full">
                          <!-- head -->
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Code</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Decsription</th>
                              <th>Category</th>
                              <th>Image</th>
                              <th>Action</th>

                            </tr>
                          </thead>
                          <tbody>
                            @method('delete')
                            @foreach ($data as $item)
                            <tr class="hover">
                              <th class="text-gray-900">{{ $loop->iteration }}</th>
                              <td class="text-gray-900">{{ $item ->code_product}}</td>
                              <td class="text-gray-900">{{ $item ->name}}</td>
                              <td class="text-gray-900">Rp.{{ $item ->price}}</td>
                              <td class="text-gray-900">{{ $item ->description}}</td>
                              <td class="text-gray-900">{{ $item ->category}}</td>
                              <td>
                                <img src="{{ asset('productsImage/'.$item ->image_product)}}"/>
                              </td>
                              <td>
                                <a href="" type="button" class="btn rounded-full bg-green-700">Update</a>
                                <a href="/delete/{{ $item -> code_product }}" type="button" class="btn rounded-full bg-red-700">Delete</a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>