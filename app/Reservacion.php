<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    protected $table = 'reservacion';

    protected $fillable = ['id_vuelo','id_cliente'];


    public function vuelo(){
        return $this->belongsTo(Vuelo::class, 'id_vuelo');
    }

     public function cliente(){
        return $this->belongsTo(User::class, 'id_cliente');
    }
}
