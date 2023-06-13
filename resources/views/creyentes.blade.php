<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>LIMBO</title>
    </head>
    <x-guest-layout>
    <x-navigation-menu>
    </x-navigation-menu>
    <body class="bg bg-cover bg-center bg-no-repeat bg-center font-jolly" style="background-image: url('{{asset('images/reli.jpg')}}');">
        <div class="animated-text font-jolly items-start text-black pt-14 pl-8 font-jolly text-3xl">
                <h1>HISTORIAS RELIGIOSAS...</h1>
        </div> 

        <livewire:card-ver />

        <div class="fixed bottom-4 right-4 flex justify-end pb-8">
            <a class="underline font-jolly text-sm text-black hover:text-hoversec rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-colorter" href="{{ route('publicar') }}">
                {{ __('¿QUIERES PUBLICAR?') }}
            </a>
        </div>
    </body>
    </x-guest-layout> 
</html>