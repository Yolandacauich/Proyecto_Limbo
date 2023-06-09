<div class="relative grid grid-cols-3 gap-4 p-4">
    @foreach($visiblehistorias as $historia)
    
    <div class="bg-white/60 shadow-md rounded-lg p-4 min-h-60 space-x-5 border-b-4 border-r-4 border-t border-l border-black rounded-s-2xl rounded-e-2xl px-2 text-justify flex flex-col justify-between">
        <h3 class="text-xl text-center font-Potta">{{ $historia->nombre_historia }}</h3>
        <div class="flex justify-center">
            <img src="data:image/png;base64,{{ base64_encode($historia->image) }}" alt=" " style="width: 100px; height: 100px;">
        </div>
        <p class="text-black font-jolly">{{ Str::words($historia->historia, 30, '...') }}</p>
        <button class="px-4 py-2 bg-green-500 text-black rounded hover:bg-green-600 focus:outline-none" wire:click="irAPaginaHistoria({{ $historia->id }})">Ver Historia</button>
        <p class="text-gray-500 mt-2">Autor: {{ $historia->user->name ?? 'Usuario desconocido' }}</p>
    </div>
    @endforeach
    <button class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-2 focus:outline-none" wire:click="previousItems" @if ($currentIndex==0) disabled @endif>
        <svg aria-hidden="true" class="w-10 h-10 stroke-black text-gray-800 rounded-full p-2 {{ $currentIndex == 0 ? 'cursor-not-allowed' : 'hover:bg-white/40' }}" fill="none" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>

    </button>
    <button class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-2 focus:outline-none" wire:click="nextItems" {{ count($historias) <= $itemsToShow || $currentIndex >= count($historias) - $itemsToShow ? 'disabled' : '' }}>
        <svg aria-hidden="true" class="w-10 h-10 stroke-black text-gray-800 rounded-full p-2 {{ count($historias) <= $itemsToShow || $currentIndex >= count($historias) - $itemsToShow ? 'cursor-not-allowed' : 'hover:bg-white/40' }}" fill="none" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>
</div>