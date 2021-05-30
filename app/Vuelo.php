<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    protected $table = 'vuelo';

    protected $fillable = ['id_avion','id_piloto','id_copiloto','id_origen','id_destino','precio'];


    public function avion(){
        return $this->belongsTo(Avion::class, 'id_avion');
    }

    public function piloto(){
        return $this->belongsTo(User::class, 'id_piloto');
    }

    public function copiloto(){
        return $this->belongsTo(User::class, 'id_copiloto');
    }

    public function origen(){
        return $this->belongsTo(Lugar::class, 'id_origen');
    }

    public function destino(){
        return $this->belongsTo(Lugar::class, 'id_destino');
    }
}
