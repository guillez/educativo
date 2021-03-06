<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
                DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'ingguillermoz@gmail.com',
            'password' =>  bcrypt('ucu522')
        ]);


        $this->call('PaisesTableSeeder');
        $this->call('ProvinciasTableSeeder');
        $this->call('CiudadesTableSeeder');

    }
}
