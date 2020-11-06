<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
               'name'=>'Admin',
               'username'=>'admin',
               'email'=>'admin@hotmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('1234'),
            ],
            [
               'name'=>'Normal User',
               'username'=>'admin',
               'email'=>'user@gmail.com',
               'is_admin'=>'1',
               'password'=> bcrypt('1234'),
            ],
        ];
  
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
