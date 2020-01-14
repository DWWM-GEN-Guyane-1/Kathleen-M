<?php

use Illuminate\Database\Seeder;

class EvenementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evenements')->insert([
            'nom'=>'Sokana',
            'lieu' =>'Cayenne',
            'date' =>'2020-01-01' ,
            'description' =>'description',
        ]);
    }
}
