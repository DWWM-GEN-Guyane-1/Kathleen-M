<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' =>'kath',
            'email' =>'skyluna97@gmail.com',
            'password' => Hash::make('skyluna'),
        ]);
    }
}
