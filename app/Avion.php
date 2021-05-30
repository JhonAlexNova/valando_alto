<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
    protected $table = 'avion';

    protected $fillable = ['id_tipo_avion','identificacion_avion','numero_pasajeros'];

     public function tipo_avion(){
        return $this->belongsTo(Tipo_Avion::class,'id_tipo_avion');
    }
}
