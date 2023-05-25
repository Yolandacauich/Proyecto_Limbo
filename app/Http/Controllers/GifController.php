<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GifController extends Controller
{
    public function index()
    {
        return view ('Gif');
    }
}
