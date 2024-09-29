<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Model\role;
use App\User;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $userData = [
            'name' => 'Suraj',
            'email' => 'suraj@gmail.com',
            'password' => Hash::make('abcd,./0')
        ];

        $user = User::create($userData);
        $user->roles()->attach(1);
    }
}
