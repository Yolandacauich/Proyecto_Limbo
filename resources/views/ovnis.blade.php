<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>LIMBO</title>
    </head>
    <x-guest-layout>
    <x-navigation-menu>
    </x-navigation-menu>
    <body class="bg bg-cover bg-center bg-no-repeat bg-center font-jolly" style="background-image: url('{{asset('images/ovni2.jpg')}}');">
      <div class="animated-text font-jolly items-start text-black pt-14 pl-8 font-jolly text-3xl ">
              <h1>HISTORIAS DE OVNIS...</h1>
      </div> 

      <div class="grid grid-cols-3 space-x-5 items-center px-32 py-8">
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
      </body>
      <audio id="audio-player" autoplay loop controls style="display:none">
      <source src="sounds/audio.mp3" type="audio/mpeg">
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
  }, maxPlaybackTime * 1000); // Multiplica por 1000 para convertir a milisegundos

  // Evento 'ended' para reiniciar el audio después de terminar la reproducción
  audioPlayer.addEventListener('ended', function() {
    setTimeout(function() {
      restartAudio();
    }, 30000); // Cambia el valor de 5000 a la cantidad de milisegundos que desees para el reinicio del audio
  });
</script>

