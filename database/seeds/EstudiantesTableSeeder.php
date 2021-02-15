<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

class EstudiantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estudiantes')->truncate();
        for ($i=0; $i < 10; $i++) {
            DB::table('estudiantes')->insert([
                'nombre' => Str::random(10),
                'apellido_paterno' => Str::random(10),
                'apellido_materno' => Str::random(10),
                'edad' => rand(17, 26),
                'email' => Str::random(10).'@gmail.com',
                'telefono' => strval(rand(4000000000, 9999999999)),
            ]);
        }

    }
}
