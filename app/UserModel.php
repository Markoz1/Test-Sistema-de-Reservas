<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
	//nombre de la tabla
    protected $table = 'USUARIO'

    //atributos
    protected $fillable = [
        'id', 'nombre', 'email', 'password',
    ];


}
