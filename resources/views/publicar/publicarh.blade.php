<form action="{{ route('publicar.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre de la Historia:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="historia">Historia:</label>
            <textarea name="historia" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" class="form-control-file" required>
        </div>

        <div class="form-group">
            <label for="audio">Audio:</label>
            <input type="file" name="audio" class="form-control-file">
        </div>

        <div class="form-group">
            <label for="video">Video:</label>
            <input type="file" name="video" class="form-control-file">
        </div>

        <div class="form-group">
            <label for="ubicacion_id">Ubicación:</label>
            <select name="ubicacion_id" class="form-control">
                @foreach ($ubicaciones as $ubicacion)
                    <option value="{{ $ubicacion->id }}">{{ $ubicacion->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Publicar</button>
    </form>