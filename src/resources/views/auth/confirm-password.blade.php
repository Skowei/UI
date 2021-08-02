<x-guest-layout>
    <x-sk.auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-sk.application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-sk.validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-sk.label for="password" :value="__('Password')" />

                <x-sk.input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-sk.button>
                    {{ __('Confirm') }}
                </x-sk.button>
            </div>
        </form>
    </x-sk.auth-card>
</x-guest-layout>
