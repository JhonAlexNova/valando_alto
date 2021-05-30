<?php

use Illuminate\Database\Seeder;
use App\Tipo_Avion;

class TipoAvionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $tipos = [
            array('tipo'=>'Avion - Pequeño')
        ];

        foreach ($tipos as $key => $value) {
            $tipo = new Tipo_Avion();
            $tipo->tipo = $value['tipo'];
            $tipo->save();
        }
    }
}
