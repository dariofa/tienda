<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellido', 'email','tipo','contrasena'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'contrasena', 'remember_token',
    ];


    public function tiqueteras(){
        return $this->hasMany('App\Tiquetera','id_user');
    }

    public function descargos_tiq(){
        return $this->hasMany('App\Descargos_tiq');
    }

}
