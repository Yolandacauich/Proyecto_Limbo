<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>LIMBO</title>
        @livewireStyles
    </head>
    <x-guest-layout>
    <x-navigation-menu> <!-- NAVEGADOR -->
    </x-navigation-menu><br>
    <body class="bg bg-cover bg-center bg-no-repeat  font-jolly" style="background-image: url('{{asset('images/para.jpg')}}');">
        <div class="animated-text  items-start text-black pt-14 pl-8 font-jolly text-3xl">
                <h1>HISTORIAS PARANORMALES...</h1>

        </div> 
        @livewire('card-ver')

        <div class="fixed bottom-4 right-4 flex justify-end pb-8">
            <a class="underline font-jolly text-base text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-colorter" href="{{ route('publicar') }}">
                {{ __('¿QUIERES PUBLICAR?') }}
            </a>
            </div>
        @livewireScripts
      </body>
    <audio id="audio-player" autoplay loop controls style="display:none">
        <source src="sounds/Creepy Music Box.mp3" type="audio/mpeg">
    </audio>


    </x-guest-layout> 
</html>

<script>
  var audioPlayer = document.getElementById('audio-player');

  // Establecer tiempo máximo de reproducción en segundos (ejemplo: 30 segundos)
  var maxPlaybackTime = 30;

  function restartAudio() {
    audioPlayer.currentTime = 0;
    audioPlayer.play();
  }

  // Iniciar la reproducción del audio
  audioPlayer.play();

  // Reiniciar el audio después del tiempo máximo especificado
  setTimeout(function() {
    restartAudio();
  }, maxPlaybackTime * 100); // Multiplica por 1000 para convertir a milisegundos

  // Evento 'ended' para reiniciar el audio después de terminar la reproducción
  audioPlayer.addEventListener('ended', function() {
    setTimeout(function() {
      restartAudio();
    }, 30000); // Cambia el valor de 5000 a la cantidad de milisegundos que desees para el reinicio del audio
  });
</script>


