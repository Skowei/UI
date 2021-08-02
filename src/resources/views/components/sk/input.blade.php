@props(['disabled' => false, 'icon' => false])

@if($icon)
    <div class="relative">
        <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                <i class="{{$icon}}"></i>
        </span>
@endif

<input {{ $disabled ? 'disabled' : '' }} 
    :class="[{{$icon ? 'true' : 'false'}} && 'pl-10']" 
    {!! $attributes->merge(['class' => 'rounded-md shadow-sm 
    border-gray-300 focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50
    dark:border-gray-700 dark:focus:border-primary-600 dark:focus-ring-primary-800 dark:focus:ring-opacity-50
    bg-gray-200 dark:bg-gray-800']) !!}
/>

@if($icon)
    </div>
@endif