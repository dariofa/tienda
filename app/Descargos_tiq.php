<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descargos_tiq extends Model
{
    protected $table = 'descargos_tiq';

    protected $fillable = ['id_tiquetera','id_empleado','id_comida'];




    public function tiquetera(){
    	return $this->belongsTo('App\Tiquetera');
    }

    public function comida(){

    	return $this->belongsTo('App\Comida');
    }

    public function usuario(){
    	return $this->belongsTo('App\User');
    }

}
