<?php

use Illuminate\Database\Seeder;

class ProvinciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \DB::table('provincias')->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
        \DB::table('provincias')->insert(array (
            0 =>
            array (
                'id' => 1,
                'nombre' => 'Entre Ríos',
                'fk_pais_id' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'nombre' => 'Buenos Aires',
                'fk_pais_id' => 1,
            ),
            2 =>
            array (
                'id' => 3,
                'nombre' => 'Paysandú',
                'fk_pais_id' => 2,
            ),            
        ));
    }
}
