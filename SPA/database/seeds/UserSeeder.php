<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User:: create([
            'name' => 'Maikel Sutradhar',
            'email' => 'maikelsutradhar1431@gmail.com',
            'password' =>bcrypt('12345678'),


        ]);
    }
}
