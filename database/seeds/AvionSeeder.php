<?php

use Illuminate\Database\Seeder;
use App\Avion;


class AvionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $aviones = [
            array('identificacion_avion'=>'000323','id_tipo_avion'=>1,'numero_pasajeros'=>6),
            array('identificacion_avion'=>'000324','id_tipo_avion'=>1,'numero_pasajeros'=>6),
            array('identificacion_avion'=>'000325','id_tipo_avion'=>1,'numero_pasajeros'=>6),
            array('identificacion_avion'=>'000326','id_tipo_avion'=>1,'numero_pasajeros'=>6),
            array('identificacion_avion'=>'000327','id_tipo_avion'=>1,'numero_pasajeros'=>6),
            array('identificacion_avion'=>'000328','id_tipo_avion'=>1,'numero_pasajeros'=>6),
            array('identificacion_avion'=>'000329','id_tipo_avion'=>1,'numero_pasajeros'=>6),
            array('identificacion_avion'=>'000330','id_tipo_avion'=>1,'numero_pasajeros'=>6),
            array('identificacion_avion'=>'000331','id_tipo_avion'=>1,'numero_pasajeros'=>6),
            array('identificacion_avion'=>'000332','id_tipo_avion'=>1,'numero_pasajeros'=>6),
        ];

        foreach ($aviones as $key => $value) {
            $avion = new Avion();
            $avion->identificacion_avion = $value['identificacion_avion'];
            $avion->id_tipo_avion = $value['id_tipo_avion'];
            $avion->numero_pasajeros = $value['numero_pasajeros'];
            $avion->save();
        }
    }
}
