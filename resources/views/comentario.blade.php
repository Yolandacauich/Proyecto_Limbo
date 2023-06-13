<div>
      <!-- Formulario para agregar comentarios -->
      <form action="/historia/{{ $historia->id }}/comentarios" method="POST">
        @csrf
        <div>
            <textarea name="comentario" id="comentario" rows="3" cols="50"></textarea>
        </div>
        <div>
            <button type="submit">Agregar Comentario</button>
        </div>
    </form>
</div>