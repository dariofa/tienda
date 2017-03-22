<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Cviebrock\EloquentSluggable\SluggableInterface;
//use Cviebrock\EloquentSluggable\SluggableTrait;

//class Comida extends Model implements SluggableInterface
class Comida extends Model 
{
	//use SluggableTrait;
    protected $table = 'comidas';

    protected $fillable = ['descripcion_comida','valor_comida','valor_comida_tiquetera'];


    public function descargos_tiq(){
    	return $this->hasMany('App\Descargos_tiq');
    }
}
