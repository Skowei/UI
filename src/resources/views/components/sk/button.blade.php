@props(['outlined' => false, 'theme' => false])
<button {{ $attributes->merge([
    'type' => 'submit', 
    'class' => 'inline-flex items-center px-4 py-2
    border-2 border-transparent rounded-md font-semibold text-xs uppercase tracking-widest
    hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 
    disabled:opacity-25 transition ease-in-out duration-100 hover:scale-105 transform-gpu']) }}
    x-data="{ outlined: {{ $outlined ? 'true' : 'false' }}, 'theme': {{$theme ? 'true' : 'false'}} }" 
    :class="[
        {{ !$outlined && $theme ? 'true' : 'false'}} && 'bg-{{$theme}}-400 hover:bg-{{$theme}}-500 focus:bg-{{$theme}}-500 active:bg-{{$theme}}-600 focus:ring-{{$theme}}-300 focus:border-{{$theme}}-300 dark:bg-{{$theme}}-600 dark:hover:bg-{{$theme}}-500 dark:focus:bg-{{$theme}}-500 dark:active:bg-{{$theme}}-400  dark:active:text-{{$theme}}-100  dark:focus:ring-{{$theme}}-600 dark:focus:border-{{$theme}}-600',
        {{ $outlined && $theme ? 'true' : 'false'}} && 'text-{{$theme}}-400 border-{{$theme}}-400 hover:bg-{{$theme}}-500 hover:text-{{$theme}}-300 focus:bg-{{$theme}}-500 focus:text-{{$theme}}-200 active:bg-{{$theme}}-600 focus:ring-{{$theme}}-300 focus:border-{{$theme}}-300 dark:text-{{$theme}}-600 dark:border-{{$theme}}-600 dark:hover:bg-{{$theme}}-500 dark:hover:text-{{$theme}}-100 dark:hover:border-{{$theme}}-500 dark:focus:bg-{{$theme}}-500 dark:focus:text-{{$theme}}-100 dark:focus:ring-{{$theme}}-600 dark:focus:border-{{$theme}}-600 dark:active:bg-{{$theme}}-400 dark:active:text-{{$theme}}-100',
    ]">
    {{ $slot }}
</button>
