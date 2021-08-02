<x-guest-layout>
    <x-sk.auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-sk.application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-sk.session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-sk.validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-sk.label for="email" :value="__('Email')" />

                <x-sk.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-sk.label for="password" :value="__('Password')" />

                <x-sk.input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <x-sk.checkbox name="remember_me" id="remember_me">
                    <span class="text-gray-500">{{ __('Remember me') }}</span>
                </x-sk.checkbox>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 dark:text-gray-500 dark:hover:text-gray-300" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-sk.button class="ml-3" theme="gray">
                    {{ __('Log in') }}
                </x-sk.button>
            </div>
        </form>
    </x-sk.auth-card>
</x-guest-layout>