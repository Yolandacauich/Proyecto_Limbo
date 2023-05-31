<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>LIMBO</title>
        @livewireStyles
    </head>
    <x-guest-layout>
    <x-navigation-menu>
    </x-navigation-menu><br>
    <body class="bg bg-cover bg-center bg-no-repeat  font-jolly" style="background-image: url('{{asset('images/para.jpg')}}');">
        <div class="animated-text  items-start text-black pt-14 pl-8 font-jolly text-3xl">
                <h1>HISTORIAS PARANORMALES...</h1>

        </div> 
        @livewire('card-ver')

        <div class="fixed bottom-4 right-4 flex justify-end pb-8">
            <a class="underline font-jolly text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-colorter" href="{{ route('publicar') }}">
                {{ __('¿QUIERES PUBLICAR?') }}
            </a>
        </div>
        @livewireScripts
    </body>
    </x-guest-layout> 
    
</html>