<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>LIMBO</title>
    </head>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="animated-text font-jolly text-xl text-black">
                {{ __('MAS POPULARES...') }}
            </h2>

        </x-slot>
            <div class="grid grid-cols-3 space-x-5 items-center px-32 py-32">
                <x-card>
                    <p>esta es la info</p>
                </x-card>
                <x-card>
                    <p>esta es la info</p>
                </x-card>
                <x-card>
                    <p>esta es la info</p>
                </x-card>
            </div>
        <div class="fixed bottom-4 right-4 flex justify-end pb-8">
            <a class="underline font-jolly text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-colorter" href="{{ route('publicar') }}">
                {{ __('¿QUIERES PUBLICAR?') }}
            </a>
        </div>
    </x-app-layout>
</html>
