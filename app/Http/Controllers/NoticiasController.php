<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function index(){
        return view ('noticias.index');
    }

    public function getNoticias(){
        $noticias = Noticia::all();
        return response()->json($noticias);
    }
}
