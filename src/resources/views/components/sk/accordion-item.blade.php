@props(['number' => '1', 'arrow' => false])
<div {{ $attributes->merge(['class' => 'relative'])}}>
    <div class="relative" @click="selected !== {{$number}} ? selected = {{$number}} : selected = null">
        {{$trigger}}
        <span x-show="{{$arrow != false ? 'true' : 'false'}}" class="absolute top-2.5 right-2.5 flex items-center justify-center w-6 ml-auto cursor-pointer">
            <i class="fas fa-caret-down fill-current transition-transform duration-400 transform" x-bind:class="selected != {{$number}} ? 'rotate-180' : 'rotate-0'"></i>
        </span>
    </div>
    <div class="relative overflow-hidden transition-all max-h-0 duration-500 mt-1" style="" x-ref="container" x-bind:style="selected == {{$number}} ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''">
        {{$slot}}
    </div>
</div>