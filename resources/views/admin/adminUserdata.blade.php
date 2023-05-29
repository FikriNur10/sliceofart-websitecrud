<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welcome {{ Auth::user()->username }}
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto bg-white" data-theme="lofi">
                        <table class="table w-full">
                          <!-- head -->
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Username</th>
                              <th>Email</th>
                              <th>Role</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($data as $item)
                            <tr class="hover">
                              <th class="text-gray-900">{{ $loop->iteration }}</th>
                              <td class="text-gray-900">{{ $item ->name}}</td>
                              <td class="text-gray-900">{{ $item ->username}}</td>
                              <td class="text-gray-900">{{ $item ->email}}</td>
                              <td class="text-gray-900">{{ $item ->roles}}</td>
                              <td>
                                <a href="" type="button" class="btn rounded-full bg-green-700 border-0">Update</a>
                                <a href="/delete/{{ $item -> username }}" type="button" class="btn rounded-full bg-red-700 border-0">Delete</a>
                              </td>
                              @endforeach
                          </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>