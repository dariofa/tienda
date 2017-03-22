<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiquetera extends Model
{
    protected $table = 'tiqueteras';

    protected $fillable = ['id_user','abonos','saldo'];


    public function user(){
        return $this->belongsTo('App\User','id_user');
    }

     public function descargos_tiq(){
        return $this->hasMany('App\Descargos_tiq');
    }
}
