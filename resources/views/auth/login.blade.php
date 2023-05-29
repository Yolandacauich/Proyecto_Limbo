@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>LIMBO</title>
    </head>
<x-guest-layout>

    <div class="text-center text-white font-Potta text-3xl">
        <div style="position: absolute; left: 50%; transform: translateX(-50%);">
                <img src="{{'images/LIMBO_1.png' }}" alt="Imagen" class= 'w-80 h-80'>
        </div>
    </div>
    <x-authentication-card>

        <x-validation-errors class="mb-4 content-center space-y-4"/>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        
        <form method="POST" action="{{ route('login') }}" class="h-64">
            @csrf

            <div class="font-jolly text-2xl content-center">
                <div class="font-jolly">
                <img src="{{'images/ss.gif' }}" alt="Imagen" class= 'w-26 h-12'>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="USUARIO" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="CONTRASEÑA" required autocomplete="current-password" />
                </div>

        <div class="flex justify-center text-center mt-4">
            <x-button class="ml-4">
                    {{ __('INICIAR SESION') }}
            </x-button>
        </div>


                <div class="flex items-center justify-center  mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-colorter" href="{{ route('password.request') }}">
                            {{ __('OLVIDE MI CONTRASEÑA') }}
                        </a>
                    @endif
                </div>

                <div class="flex items-center justify-center  mt-4">
                    @if (Route::has('register'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-colorter" href="{{ route('register') }}">
                            {{ __('QUIERO REGISTRARME') }}
                        </a>
                    @endif
                </div>

            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
</html>
