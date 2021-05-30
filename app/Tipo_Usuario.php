<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Usuario extends Model
{
    protected $table = 'tipo_usuario';
    protected $fillable = ['id_usuario','id_rol'];

    public function rol(){
        return $this->belongsTo(Rol::class, 'id_rol');
    }
}
