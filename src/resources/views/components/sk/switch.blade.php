@props(['name' => '', 'id' => '', 'theme' => false, 'outlined' => false, 'checked' => false, 'disabled' => false])
<label for="{{$id}}" class="inline-flex items-center gap-x-2 cursor-pointer">
    <div
        x-data="{checked: {{$checked ? 'true' : 'false'}}, theme: {{ $theme ? 'true' : 'false'}}, outlined: {{$outlined ? 'true' : 'false'}}}"
        @if(!$disabled) @click="checked = !checked" @endif
        :class="[!checked && !outlined ? 'bg-gray-200 dark:bg-gray-700 border-2 border-gray-300 dark:border-gray-800' 
                    : !checked && theme && outlined ? 'bg-transparent dark:bg-transparent border-2 border-{{$theme}}-300 dark:border-{{$theme}}-600'
                        : checked && theme ? 'bg-{{$theme}}-400 dark:bg-{{$theme}}-600'
                            : 'bg-primary-400 dark:bg-primary-600']"
        class="relative inline-flex items-center h-6 rounded-full w-11 @if($disabled)opacity-75 @endif"
    >
        <span
        :class="[
            checked ? 'translate-x-6 transform duration-200' : 'translate-x-0.5 transform duration-200',
            {{$disabled ? 'true' : 'false'}} && 'opacity-75'
        ]"
        class=" w-4 h-4 transform bg-gray-700 dark:bg-gray-100 rounded-full"/>
        <input type="checkbox" class="hidden" {{$attributes}} name="{{$name}}" id="{{$id}}" {{$disabled ? 'disabled' : ''}} {{$checked ? 'checked' : ''}} :value="checked">
    </div>
    {{$slot}}
</label>