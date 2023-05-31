<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historia;
use Auth;

class HistoriaController extends Controller
{
    public function showForm()
    {
        // Obtener ubicaciones disponibles para mostrar en el formulario
        $ubicaciones = Ubicacion::all();

        return view('publicar', compact('ubicaciones'));
    }

    public function store(Request $request)
    {
        // Validar los campos del formulario
        $validatedData = $request->validate([
            'nombre_historia' => 'required|string|max:255',
            'historia' => 'required|string',
            'imagen' => 'required|image|max:2048',
            'audio' => 'nullable|mimes:audio/mpeg,video/mp4|max:5000',
            'video' => 'nullable|mimes:video/mp4|max:5000',
        ]);

        // Subir la imagen
        $imagenPath = $request->file('imagen')->store('public/images');

        // Subir el audio (si está presente)
        if ($request->hasFile('audio')) {
            $audioPath = $request->file('audio')->store('public/audios');
        } else {
            $audioPath = null;
        }

        // Subir el video (si está presente)
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('public/videos');
        } else {
            $videoPath = null;
        }

        // Crear la historia en la base de datos
        $historia = new Historia();
        $historia->nombre = $request->nombre;
        $historia->historia = $request->historia;
        $historia->imagen = $imagenPath;
        $historia->audio = $audioPath;
        $historia->video = $videoPath;
        $historia->categoria_id = $request->categoria_id;
        $historia->ubicacion_id = $request->ubicacion_id;
        $historia->user_id = Auth::id(); // Tomar el ID del usuario autenticado
        $historia->save();

        // Redirigir a una página de éxito o mostrar un mensaje
        return redirect()->route('publicar.form')->with('success', 'Historia publicada exitosamente.');
    }
}
