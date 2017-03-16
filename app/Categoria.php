<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $table = 'categoria';

	protected $primaryKey = 'idcategoria';
	
	public function objetos() {
		return $this->hasMany('App\Objeto', 'idobjeto', 'idobjeto', 'objeto');
	}

	
}
