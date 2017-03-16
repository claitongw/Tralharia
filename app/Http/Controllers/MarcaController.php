<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class MarcaController extends Controller
{

    public function listaMarca()
    {
        $marca = DB::table('marca')->get();

        return view('listarMarca', ['marca' => $marca]);
    }
}
