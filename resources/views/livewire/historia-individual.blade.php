<div class="bg bg-cover bg-center bg-no-repeat  font-jolly"
    style="background-image: url('{{ asset('images/fondoniebla.jpg') }}');">
    <h1 class='font-Potta text-center  items-start text-black text-3xl'>{{ $historia->nombre_historia }}</h1><br>
    <div class="flex justify-center">
        <img src="data:image/png;base64,{{ base64_encode($historia->image) }}" alt=" "
            style="width: 300px; height: 200px;">
    </div><br>
    <p class='font-jolly text-justify mx-8 txt'>{{ $historia->historia }}</p> <br>
    
    <input type="text" wire:model="comentario">
    <button wire:click="agregarComentario">enviar</button>
</div>

    <!-- VISTA DE LA HISTORIA -->