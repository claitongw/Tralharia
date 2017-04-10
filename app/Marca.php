<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
    protected $table = 'marca';


    public function promocao(){
        return $this->hasMany('App\Promocao');
    }

//	protected $primaryKey = 'idmarca';

//	public function promocao() {
//		return $this->hasMany('App\Promocao', 'idpromocao');
//	}
//
//	public function objeto() {
//		return $this->hasMany('App\Objeto', 'idobjeto', 'idobjeto', 'objeto');
//	}
}
