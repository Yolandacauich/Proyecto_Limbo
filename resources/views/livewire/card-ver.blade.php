<div>
<div>
<div class="grid grid-cols-3 gap-4 p-4">
    @foreach($historias as $historia)
        @if($historia->categoria_id == 1)
        <div class="bg-white/60 shadow-md rounded-lg p-4 min-h-60 space-x-5 border-b-4 border-r-4 border-t border-l border-black rounded-s-2xl rounded-e-2xl px-2 text-justify flex flex-col justify-between">
            <h3 class="text-xl text-center font-Potta">{{ $historia->nombre_historia }}</h3>
            <div class="flex justify-center">
                <img src="data:image/png;base64,{{ base64_encode($historia->image) }}" alt=" " style="width: 100px; height: 100px;">
            </div>
            <p class="text-black font-jolly">{{ Str::words($historia->historia, 30, '...') }}</p>
            <button class="px-4 py-2 bg-green-500 text-black rounded hover:bg-green-600 focus:outline-none" wire:click="irAPaginaHistoria({{ $historia->id }})">Ver Historia</button>
            <p class="text-gray-500 mt-2">Autor: {{ $historia->user->name ?? 'Usuario desconocido' }}</p>
        </div>
        @endif
    @endforeach
</div>


</div>

</div>
