@extends('components.app')
    @section('content')
        <form action="{{ $user->profile() }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="mb-6">

                <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>

                <input type="text" name="name" id="name" value="{{ $user->name }}" class="border border-gray-400 p-2 mb-4 w-full">

                @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror



                <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>

                <input type="text" name="username" id="username" value="{{ $user->username }}" class="border border-gray-400 p-2 mb-4 w-full">

                @error('username')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror






                <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">Avatar</label>

                <input type="file" name="avatar" id="avatar" value="{{ $user->avatar }}" class="border border-gray-400 p-2  w-full">

                @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

                <img src="{{ $user->avatar }}" alt="avatar mb-4" width="40">


                <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>

                <input type="email" name="email" id="email" value="{{ $user->email }}" class="border border-gray-400 p-2 mb-4 w-full">

                @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror



                <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>

                <input type="password" name="password" id="password" class="border border-gray-400 p-2 mb-4 w-full" required>

                @error('')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror



                <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">Confirm Password</label>

                <input type="password" name="password_confirmation" id="password_confirmation" class="border border-gray-400 p-2 mb-4 w-full" required>

                @error('')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror


            </div>

            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"> Submit </button>
            </div>

        </form>
    @endsection
