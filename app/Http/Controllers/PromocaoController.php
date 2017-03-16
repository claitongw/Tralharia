<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class PromocaoController extends Controller
{
    //

    public function listaPromocao()
    {
        $promo = DB::table('promocao')->where('idpromocao','>=',2)->get();

		//$promo = DB::table('promocao')->where('idpromocao','3')->first();
        
        //$c = $promo::find(1);

        return view('listarPromocao', ['promo' => $promo]);
    }


}
