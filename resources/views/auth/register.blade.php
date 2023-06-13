<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>LIMBO</title>
    </head>
    
    <x-guest-layout>
    <body class="antialiased bg-cover bg-center font-jolly " style="background-image: url('{{asset('images/ojos-2.gif')}}');">
        <div class="text-center text-white font-Potta text-3xl">
        <div style="position: absolute; left: 50%; transform: translateX(-50%);">
                <img src="{{'images/LIMBO_2.png' }}" alt="Imagen" class= 'w-80 h-60'>
        </div>
        </div>
        <x-authentication-card>
            <x-slot name="logo">
                <x-authentication-card-logo />
            </x-slot>

            <x-validation-errors class="mb-4 border-black bg-black" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="">
                    <x-input id="name" class="block mt-1 w-full border-black" placeholder="NOMBRE Y APELLIDOS" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                <x-input id="date" class="block mt-1 w-full font-Jolly Lodger text-colorter"  type="date" name="date" :value="old('date')" required autofocus autocomplete="date" />
                </div>

                <div class="mt-4">

                    <x-input id="email" class="block mt-1 w-full" placeholder="CORREO" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <div class="mt-4">

                    <x-input id="password" class="block mt-1 w-full" placeholder="CONTRASEÑA" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
    
                    <x-input id="password_confirmation" class="block mt-1 w-full" placeholder="CONFIRMAR CONTRASEÑA" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4 text-white">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ml-2 text-white">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-white hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class=" border-black underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4 font-jolly">
                    <a class="underline text-sm text-white hover:text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-colorter" href="{{ route('login') }}">
                        {{ __('¿YA ESTAS REGISTRADO?') }}
                    </a>

                    <x-button class="ml-4">
                        {{ __('REGISTRARTE') }}
                    </x-button>
                </div>
            </form>
        </x-authentication-card>
    </body>
    </x-guest-layout>
</html>
