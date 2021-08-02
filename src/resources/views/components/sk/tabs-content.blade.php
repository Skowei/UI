@props(['number' => '1'])
<div {{ $attributes->merge(['class' => 'relative'])}}>
    <div class="relative overflow-hidden transition-all max-h-0 duration-500" style="" x-ref="container" x-bind:style="selected == {{$number}} ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''">
        {{$slot}}
    </div>
</div>