@props(['selected' => null])
<div x-data="{selected: {{$selected ? $selected : 'null'}}}" {{$attributes->merge(['class' => 'flex flex-col gap-1'])}}>
    {{$slot}}
</div>