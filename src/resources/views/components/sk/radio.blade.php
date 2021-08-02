@props(['id' => '', 'name' => '', 'theme' => '', 'checked' => false, 'disabled' => false])
<label for="{{$id}}" class="inline-flex items-center gap-x-2 cursor-pointer" x-data="{ theme: {{ $theme ? 'true' : 'false' }} }">
    <input {{ $attributes->merge([
        'type' => 'radio', 
        'class' => 'cursor-pointer h-5 w-5 rounded-full focus:ring-opacity-50 shadow-sm focus:ring appearance-none 
            border-gray-300 text-primary-600 bg-gray-200 border-2
            focus:border-primary-300 focus:ring-primary-200  focus:bg-primary-400
            checked:bg-primary-400
            active:bg-primary-400
            hover:bg-primary-200

            dark:border-gray-700 dark:text-gray-200 dark:bg-gray-800 
            dark:focus:border-primary-600 dark:focus:ring-primary-800 dark:focus:bg-primary-700
            dark:checked:bg-primary-700
            dark:active:bg-primary-400
            dark:hover:bg-primary-900']) }}
        id="{{$id}}"
        name="{{$name}}"
        {{$checked ? 'checked' : ''}}
        {{$disabled ? 'disabled' : ''}}
        :class="[
            {{$theme ? 'true' : 'false'}} && 'border-gray-300 text-gray-600 bg-gray-100 focus:border-{{$theme}}-300 focus:ring-{{$theme}}-200  focus:bg-{{$theme}}-400 checked:bg-{{$theme}}-400 active:bg-{{$theme}}-400 hover:bg-{{$theme}}-200 dark:border-gray-700 dark:text-gray-200 dark:bg-gray-800 dark:focus:border-{{$theme}}-600 dark:focus:ring-{{$theme}}-800 dark:focus:bg-{{$theme}}-700 dark:checked:bg-{{$theme}}-700 dark:active:bg-{{$theme}}-400 dark:hover:bg-{{$theme}}-800', 
            {{$disabled ? 'true' : 'false'}} && 'opacity-50'
        ]"/>
    {{$slot}}
</label>