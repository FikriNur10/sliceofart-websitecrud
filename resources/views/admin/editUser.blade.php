<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit User Data
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200"> 
    <form method="POST" action="/userdata/{{ $data->id}}/update">
        @csrf
        @method('PUT')
        <!-- Name -->
        <div>
            <x-label for="name" :value="__('Name')" />
            
            <x-input id="name" class="block mt-1 w-full text-black" type="text" name="name" value="{{ $data->name}}" required autofocus/>
        </div>
        <!-- Name -->
        <div class="mt-4">
            <x-label for="username" :value="__('Username')" />
            
            <x-input id="username" class="block mt-1 w-full text-black bg-gray-100" type="text" name="username" value="{{ $data->username}}" required disable/>
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="email" :value="__('Email')" />
            
            <x-input id="email" class="block mt-1 w-full text-black" type="email" name="email" value="{{ $data->email}}" required />
        </div>

        {{-- Roles --}}
        <div class="my-4">
            <x-label for="roles" :value="__('Register as')" />
            <select  name="roles" class="form-control w-full mt-1 rounded-md text-black bg-gray-100">
                @if($data->roles == 'artist')
                    <option name="roles" type="option" id="roles" value="artist" required>Artist</option>
                    @elseif($data->roles == 'buyer')
                    <option name="roles" type="option" id="roles" value="buyer" required>Buyer</option>
                @endif
            </select>
        </div>
        
        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Password')" />

            <x-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
        </div>
            <x-button class="mt-5">
                {{ __('Update') }}
            </x-button>

                </div>
            </div>
        </div>
    </div>
    </form>
</x-app-layout>