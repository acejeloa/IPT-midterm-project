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
        $list = [
            [
                'id'=>'1',
                'lname'=>'Astacaan',
                'fname'=>'Ace',
                'address'=>'Tubigon,Bohol',
                'phone'=>'09123214',
                'email'=>'Ace@email.com',
                'password'=>bcrypt('passwrd123')
            ],
            [
                'id'=>'2',
                'lname'=>'Smith',
                'fname'=>'Stephen Cary',
                'address'=>'USA,Street 101',
                'phone'=>'09123214',
                'email'=>'Ace@email.com',
                'password'=>bcrypt('passwrd123')
            ],
            [
                'id'=>'3',
                'lname'=>'Maria',
                'fname'=>'Carry',
                'address'=>'LA,Wild Street 134',
                'phone'=>'09123214',
                'email'=>'Ace@email.com',
                'password'=>bcrypt('passwrd123')
            ],
        ];
        foreach($list as $user){
            \App\User::create($user);
        }

    }
}
