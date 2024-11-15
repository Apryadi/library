<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserDummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Apryadi',
                'email'=>'adwiputra01@gmail.com',
                'password'=>bcrypt('08218835'),
                'role'=>'Admin'
            ],
            [
                'name'=>'Franklin',
                'email'=>'fijaya01@gmail.com',
                'password'=>bcrypt('123234'),
                'role'=>'Librarian'
            ],
            [
                'name'=>'Alvin',
                'email'=>'alyuga01@gmail.com',
                'password'=>bcrypt('432321'),
                'role'=>'Librarian'
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
