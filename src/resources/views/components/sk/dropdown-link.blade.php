<a {{ $attributes->merge(['class' => 'block px-4 py-2 text-sm leading-5 transition duration-150 ease-in-out focus:outline-none
                                    text-gray-700       hover:bg-gray-100       focus:bg-gray-100
                                    dark:text-gray-300  dark:hover:bg-gray-900  dark:ocus:bg-gray-900
                        ']) }}>
    {{ $slot }}
</a>
