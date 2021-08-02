@props(['id' => '', 'name' => '', 'checked' => false, 'disabled' => false, 'theme' => false, 'outlined' => false, 'colored' => false])
<label for="{{$id}}" class="inline-flex items-center gap-x-2 cursor-pointer">
    <input x-data="{checked: {{$checked && !$disabled ? 'true' : 'false'}}, theme: {{ $theme ? 'true' : 'false'}}}"
        id="{{$id}}"
        {{ $attributes->merge([
            'type' => 'checkbox',
            'class' => 'cursor-pointer h-5 w-5 rounded-md focus:ring-opacity-50 shadow-sm focus:ring appearance-none border-2
            border-gray-300 text-primary-500
            focus:border-primary-300 focus:ring-primary-200 focus:bg-primary-400
            checked:bg-primary-400
            active:bg-primary-400
            hover:bg-primary-200

            dark:border-gray-700 dark:text-primary-200 dark:bg-gray-800 
            dark:focus:border-primary-600 dark:focus:ring-primary-800 dark:focus:bg-primary-700
            dark:checked:bg-primary-700
            dark:active:bg-primary-400
            dark:hover:bg-primary-900']) }}
        {{ $checked  ? 'checked'  : '' }}
        {{ $disabled ? 'disabled' : '' }}
        name="{{$name}}" 
        :class="[ 
            {{$theme ? 'true' : 'false'}} &&  'border-gray-300 text-{{$theme}}-500 bg-gray-100 focus:border-{{$theme}}-300 focus:ring-{{$theme}}-200  focus:bg-{{$theme}}-400 checked:bg-{{$theme}}-400 active:bg-{{$theme}}-400 hover:bg-{{$theme}}-200 dark:text-{{$theme}}-200 dark:border-gray-700 dark:text-{{$theme}}-200 dark:bg-gray-800 dark:focus:border-{{$theme}}-600 dark:focus:ring-{{$theme}}-800 dark:focus:bg-{{$theme}}-700 dark:checked:bg-{{$theme}}-700 dark:checked:outline-{{$theme}}-700 dark:checked:border-{{$theme}}-600  dark:checked:ring-{{$theme}}-600 dark:active:bg-{{$theme}}-400 dark:hover:bg-{{$theme}}-800',
            {{$theme && $outlined ? 'true' : 'false'}} && 'border-{{$theme}}-300 bg-transparent dark:border-{{$theme}}-700',
            {{$theme && $colored ? 'true' : 'false'}} && 'bg-{{$theme}}-100 dark:bg-{{$theme}}-900',
            {{$disabled ? 'true' : 'false'}} && 'transform opacity-50',
            {{!$theme ? 'true' : 'false'}} && 'bg-gray-200 ',
        ]"/>
    
    {{$slot}}
</label>