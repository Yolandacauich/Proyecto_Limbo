<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>LIMBO</title>
    </head>
    <x-guest-layout>
    <x-navigation-menu>
    </x-navigation-menu>
    <div class=" fixed animated-text font-jolly items-start text-black pt-32  pl-8 font-jolly text-3xl">
            <h1>MÁS HISTORIAS...</h1>
    </div> 

    <div class="fixed bottom-4 right-4 flex justify-end pb-8">
            <a class="underline font-jolly text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-colorter" href="{{ route('publicar') }}">
                {{ __('¿QUIERES PUBLICAR?') }}
            </a>
    </div>
    </x-guest-layout> 
</html>