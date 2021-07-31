<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Emmanuel',
            'username' => 'Manu',
            'email' => 'emmanuel.dessaint1@gmail.com',
            'password' => 'aze',
            
         ]);
         
         
    }
}
