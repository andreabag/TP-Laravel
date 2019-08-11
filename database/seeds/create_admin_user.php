<?php

use Illuminate\Database\Seeder;

class create_admin_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => 'admin',
            "surname" =>'admin',
            "user" => 'admin',
            "birthdate" => '2019-11-08',
            "avatar" => 'Avatar',
            "province" => 'Marte',
            "password" => bcrypt('adminadmin'),
            "email" => 'admin@bigfashion.com',
            "isAdmin" => true,
        ]);

        
    }
}
