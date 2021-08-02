<x-guest-layout>
    <x-sk.auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-sk.application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-sk.validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-sk.label for="name" :value="__('Name')" />

                <x-sk.input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-sk.label for="email" :value="__('Email')" />

                <x-sk.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-sk.label for="password" :value="__('Password')" />

                <x-sk.input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-sk.label for="password_confirmation" :value="__('Confirm Password')" />

                <x-sk.input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 dark:text-gray-500 dark:hover:text-gray-300" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-sk.button class="ml-4" theme="gray">
                    {{ __('Register') }}
                </x-sk.button>
            </div>
        </form>
    </x-sk.auth-card>
</x-guest-layout>
