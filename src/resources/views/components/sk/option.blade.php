@props(['value' => '', 'text' => ''])

<option {!! $attributes->merge(['class' => '']) !!}
    value="{{$value}}">
    {{$text}}
</option>
