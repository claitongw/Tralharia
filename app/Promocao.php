<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocao extends Model
{
    //
    protected $table = 'promocao';

	protected $primaryKey = 'idpromocao';
	
	public function marca() {
		return $this->belongsto('App\Marca', 'idmarca', 'idmarca', 'marca');
	}

	public function objeto() {
		return $this->hasMany('App\Objeto', 'idobjeto', 'idobjeto', 'objeto');
	}
}
