<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="m-1">
        @csrf

        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <!-- Name -->
            <div>
                <x-input-label for="first_name" :value="__('First name :')" />
                <x-text-input id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="last_name" :value="__('Last name :')" />
                <x-text-input id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
            </div>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email :')" />
            <x-text-input id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password :')" />

            <x-text-input id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password :')" />

            <x-text-input id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4 bg-primary">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
