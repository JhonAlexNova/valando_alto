<?php

use Illuminate\Database\Seeder;
use App\Lugar;

class LugaresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $lugares = [
            array('nombre'=>'Bogota'),
            array('nombre'=>'Villavicencio'),
            array('nombre'=>'Medellin'),
            array('nombre'=>'Cali'),
        ];

        foreach ($lugares as $key => $value) {
            $lugar = new Lugar();
            $lugar->nombre = $value['nombre'];
            $lugar->save();
        }
    }
}
