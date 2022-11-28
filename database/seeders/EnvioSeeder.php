<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Envio;
use Illuminate\Database\Seeder;

class EnvioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            array('mes'=>'Enero','cantidad'=>10),
            array('mes'=>'Febrero','cantidad'=>10),
            array('mes'=>'Marzo','cantidad'=>40),
            array('mes'=>'Abril','cantidad'=>10),
            array('mes'=>'Mayo','cantidad'=>68),
            array('mes'=>'Junio','cantidad'=>10),
            array('mes'=>'Julio','cantidad'=>68),
            array('mes'=>'Agosto','cantidad'=>10),
            array('mes'=>'Septiembre','cantidad'=>68),
            array('mes'=>'Octubre','cantidad'=>10),
            array('mes'=>'Noviembre','cantidad'=>10),
            array('mes'=>'Diciembre','cantidad'=>10),
        
        ];
        Envio::insert($data);
    }
}
