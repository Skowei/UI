@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 transition duration-150 ease-in-out focus:outline-none text-sm font-medium leading-5
            border-primary-400 text-gray-900 focus:border-primary-700
            dark"border-indigho-600 dark:text-gray-100 dark:focus:border-primary-300'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none 
            text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:text-gray-700 focus:border-gray-300
            dark:text-gray-500 dark:hover:text-gray-300 dark:hover:border-gray-700 dark:focus:text-gray-300 dark:focus:border-gray-700';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
