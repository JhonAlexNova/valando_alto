<?php

use Illuminate\Database\Seeder;
use App\Tipo_Avion;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $rols = [
            array('tipo'=>'piloto'),
            array('tipo'=>'copiloto'),
            array('tipo'=>'cliente')
        ];

        foreach ($rols as $key => $value) {
            $tipo = new Tipo_Avion();
            $tipo->tipo = $value['tipo'];
            $tipo->save();
        }
    }
}
