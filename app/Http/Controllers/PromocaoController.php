<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use \App\Promocao;
use \App\Marca;

use App\Http\Requests;

class PromocaoController extends Controller
{
    //

    public function listaPromocao()
    {
//        $promo = DB::table('promocao')->where('idpromocao','>=',2)->get();

        //$promo = DB::table('promocao')->where('idpromocao','3')->first();

        //$c = $promo::find(1);

        $promo = Promocao::all();

        //aqui está o que você queria
        //$promo->marca->nome;

        // a maneira recomendável de passar uma mariável para a view é com compact. desta maneira.
        return view('listarPromocao', compact('promo'));
    }


}
