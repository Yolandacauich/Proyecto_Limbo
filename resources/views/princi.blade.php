@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>LIMBO</title>
    </head>
<x-guest-layout>
    <div class="relative min-h-screen bg-dots-darker bg-center selection:bg-hoverpri selection:text-black">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 text-right  w-full bg-white border-b-4 border-black ">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold rounded-s-2xl rounded-e-xl text-base text-black mr-12 hover:text-hoversec focus:outline focus:outline-2 focus:rounded-sm focus:outline-hoverpri px-2.5 py-0.5 ">LIMBO</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold bg-hoverpri rounded-full text-base text-black hover:text-hoversec focus:outline focus:outline-2 focus:rounded-sm focus:outline-hoverpri px-2.5 py-0.5">INICIAR SESION</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 mr-4 text-base bg-hoverpri rounded-s-xl rounded-e-xl font-semibold text-black hover:text-hoversec focus:outline focus:outline-2 focus:rounded-sm focus:outline-hoverpri px-2.5 py-0.5 mb-8">REGISTRARTE</a>

                            @endif
                    @endauth
                </div>
            @endif
            <div class="font-jolly items-start text-black pt-32  pl-8 font-jolly text-3xl">
            <p>MÁS POPULARES...</p>
            </div>  
            <div class="grid grid-cols-3"> 
            <div>01</div>
            <div>01</div>
            <div>01</div>
        
    </div> 

</x-guest-layout>
</html>




