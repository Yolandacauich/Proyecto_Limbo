<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use App\Models\Ubicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PublicarController extends Controller
{
    public function index()
    {
        return view ('publicar');
        
    }

}
