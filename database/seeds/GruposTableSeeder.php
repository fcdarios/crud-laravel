<?php

use Illuminate\Database\Seeder;


class GruposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos')->truncate();
        $turno = array('M', 'V');
        for ($i=0; $i < 10; $i++) {
            DB::table('grupos')->insert([
                'semestre' => rand(1,10),
                'grupo' => Str::random(3),
                'turno' => $turno[rand(0,1)],
            ]);
        }
    }
}
