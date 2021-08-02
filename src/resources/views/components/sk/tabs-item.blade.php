@props(['number' => '1'])
<div {{ $attributes->merge(['class' => 'relative'])}}>
    <div class="relative" @click="selected !== {{$number}} ? selected = {{$number}} : selected = null">
        {{$slot}}
    </div>
</div>