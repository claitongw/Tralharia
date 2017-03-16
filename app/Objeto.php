<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
    //
    protected $table = 'objeto';

	protected $primaryKey = 'idobjeto';
	
	public function promocao() {
		return $this->belongsto('App\Promocao', 'idpromocao', 'idpromocao', 'promocao');
	}

	public function marca() {
		return $this->belongsto('App\Marca', 'idmarca', 'idmarca', 'marca');
	}

	public function categoria() {
		return $this->belongsto('App\Categoria', 'idcategoria', 'idcategoria', 'categoria');
	}


}
