@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'hover:hoversec border-b-4 border-r-4 focus:bg-hoversec focus:outline-colorter outline-colorter focus:border-colorter border-black rounded-s-2xl rounded-e-2xl']) !!}>
