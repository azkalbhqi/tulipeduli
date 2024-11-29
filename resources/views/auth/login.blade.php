<x-layout-app>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="bg-gray-800 p-6 rounded-lg shadow-lg w-full max-w-md mx-auto mt-16">
        @csrf
        <h1 class="text-4xl font-bold my-3 text-white uppercase text-center">Login Page</h1>

        <!-- Email Address -->
        <div class="my-4">
            <x-input-label for="email" :value="__('Email')" class="text-gray-200" />
            <x-text-input id="email" class="block mt-1 w-full rounded-lg bg-gray-700 text-white border-0 focus:ring-2 focus:ring-indigo-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
        </div>

        <!-- Password -->
        <div class="my-4">
            <x-input-label for="password" :value="__('Password')" class="text-gray-200" />
            <x-text-input id="password" class="block mt-1 w-full rounded-lg bg-gray-700 text-white border-0 focus:ring-2 focus:ring-indigo-500" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
        </div>

        <!-- Remember Me -->
        <div class="mt-4 flex justify-between items-center">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded bg-gray-700 border-gray-500 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-400">{{ __('Remember me') }}</span>
            </label>
            @if (Route::has('password.request'))
                <a class="text-sm text-indigo-400 hover:text-indigo-500 transition duration-150 ease-in-out" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <div class="flex items-center justify-between mt-6">
            <x-primary-button class="py-2 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-500 hover:to-indigo-500 text-white font-semibold rounded-lg shadow-lg transform hover:scale-105 transition duration-150 ease-in-out">
                {{ __('Log in') }}
            </x-primary-button>
            
            <a class="text-sm text-indigo-400 hover:text-indigo-500 transition duration-150 ease-in-out" href="/register">
                {{ __("Don't have an account?") }}
            </a>
            
        </div>
    </form>
</x-layout-app>
