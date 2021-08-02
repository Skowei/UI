@props(['selected' => 1])
<div x-data="{selected: {{$selected ? $selected : 'null'}}}" {{$attributes->merge(['class' => 'flex flex-col gap-1'])}}>
    <div class="flex flex-row gap-1">
        {{$trigger}}
    </div>
    <div>
        {{$content}}
    </div>
</div>