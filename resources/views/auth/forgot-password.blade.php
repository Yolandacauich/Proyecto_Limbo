<x-guest-layout>

    <div class="text-center text-black font-Potta text-3xl">
        <h1>LIMBO</h1>
    </div>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm font-jolly text-gray-600">
            {{ __('¿OLVIDASTE TU CONTRASEÑA? PROPORCIONANOS TU CORREO PARA RESTABLECER TU CONTRASEÑA') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="CORREO"  required autofocus autocomplete="username" />
            </div>

            <div class="flex justify-center text-center mt-4">
                <x-button class="bg-black border-4 border-transparent">
                    {{ __('ENVIAR CORREO') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
