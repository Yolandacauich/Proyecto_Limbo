@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'hover:hoversec border-4 focus:bg-hoversec border-black rounded-s-2xl rounded-e-2xl']) !!}>
