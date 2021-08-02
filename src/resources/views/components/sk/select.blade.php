@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} 
        {!! $attributes->merge(['class' => 'rounded-md shadow-sm 
                                            border-gray-300 focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50
                                            dark:border-gray-700 dark:focus:border-primary-600 dark:focus-ring-primary-800 dark:focus:ring-opacity-50
                                            bg-gray-200 dark:bg-gray-800']) !!}>
    {{$slot}}
</select>
