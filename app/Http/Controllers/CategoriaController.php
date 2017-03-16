<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function listaCategoria()
    {
        $categoria = DB::table('categoria')->get();

        return view('listarCategoria', ['categoria' => $categoria]);
    }
}