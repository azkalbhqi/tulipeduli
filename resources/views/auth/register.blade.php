<x-guest-layout>
    <div class="max-w-md mx-auto mt-16 bg-gray-800 p-8 rounded-lg shadow-lg">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1 class="text-4xl font-bold mb-6 text-white text-center uppercase">Register</h1>

            <!-- Name -->
            <div class="mb-4">
                <x-input-label for="name" :value="__('Name')" class="text-gray-200" />
                <x-text-input id="name" class="block mt-1 w-full rounded-lg bg-gray-700 text-white border-0 focus:ring-2 focus:ring-indigo-500" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
            </div>

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" class="text-gray-200" />
                <x-text-input id="email" class="block mt-1 w-full rounded-lg bg-gray-700 text-white border-0 focus:ring-2 focus:ring-indigo-500" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" class="text-gray-200" />
                <x-text-input id="password" class="block mt-1 w-full rounded-lg bg-gray-700 text-white border-0 focus:ring-2 focus:ring-indigo-500" type="password" name="password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-200" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full rounded-lg bg-gray-700 text-white border-0 focus:ring-2 focus:ring-indigo-500" type="password" name="password_confirmation" required />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
            </div>

            <!-- Already Registered Link and Register Button -->
            <div class="flex items-center justify-between mt-6">
                <a class="text-sm text-indigo-400 hover:text-indigo-500 transition duration-150 ease-in-out underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="py-2 px-6 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-500 hover:to-indigo-500 text-white font-semibold rounded-lg shadow-lg transform hover:scale-105 transition duration-150 ease-in-out">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
