@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center font-jolly px-1 pt-1 border-b-4 border-black text-base font-medium leading-5 text-gray-900 focus:outline-none focus:border-hoverpri transition duration-150 ease-in-out'
            : 'inline-flex items-center font-jolly  px-1 pt-1 border-b-4 border-black text-base font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-hoverpri focus:outline-none focus:text-gray-700 focus:border-black transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
