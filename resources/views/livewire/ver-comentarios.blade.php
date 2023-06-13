<div>

    <div>
        <h2>Comentarios</h2>

        @foreach ($comentarios as $comentario)
            <div style="text-align:{{ $comentario->user_id === auth()->user()->id ? 'right' : 'left' }}">
                <p><strong>{{ $comentario->users->name }}</strong>: {{ $comentario->comentario }}</p>
            </div>
        @endforeach
    </div>




    <div class='ml-8'>
        <x-input type="text" wire:model="comentario"></x-input>
        <x-button wire:click="agregarComentario">ENVIAR</x-button>
        @if ($mostrarSweetAlert)
            <script>
                Swal.fire({
                    title: '¡TU COMENTARIO SE HA REALIZADO!',
                    confirmButtonColor: '#A6A6A6',
                    showClass: {
                        popup: 'animate_animated animate_fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate_animated animate_fadeOutUp'
                    }
                });
            </script>
        @endif
    </div>
</div>