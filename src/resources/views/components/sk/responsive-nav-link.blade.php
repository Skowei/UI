@props(['active'])

@php
$classes = ($active ?? false)
            ?  'block pl-3 pr-4 py-2 border-l-4 transition duration-150 ease-in-out focus:outline-none  text-base font-medium
                border-primary-400 text-primary-700 bg-primary-50 focus:text-primary-800 focus:bg-primary-100 focus:border-primary-700
                dark:border-primary-600 dark:text-primary-300 dark:bg-primary-900 dark:focus:text-primary-200 dark:focus:bg-primary-900 dark:focus:border-primary-300'
            :  'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium transition duration-150 ease-in-out focus:outline-none
                text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300
                dark:text-gray-400 dark:hover:text-gray-200 dark:hover:bg-gray-900 dark:hover:border-gray-700 dark:focus:text-gray-200 dark:focus:bg-gray-900 dark:focus:border-gray-700';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
