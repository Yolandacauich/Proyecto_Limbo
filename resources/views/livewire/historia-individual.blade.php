<x-app-layout>
<div>
<div>
    <h2>{{ $historia->nombre_historia }}</h2>
    <p>{{ $historia->historia }}</p>
    <!-- Agrega aquí el resto de los detalles que deseas mostrar -->
</div>
<h3>Comentarios</h3>
    @foreach ($historia->comentarios as $comentario)
        <div>
            <p>Autor: {{ $comentario->users->name ?? 'usuario desconocido' }}</p>
            <p>{{ $comentario->comentario }}</p>
        </div>
    @endforeach

    <input type="text" wire:model="miComentario">
    <button wire:click="agregarComentario">Enviar</button>

</div>
</x-app-layout>