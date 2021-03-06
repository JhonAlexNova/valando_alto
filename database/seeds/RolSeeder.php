<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolSeeder extends Seeder
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
            $rol = new Rol();
            $rol->tipo = $value['tipo'];
            $rol->save();
        }
    }
}
