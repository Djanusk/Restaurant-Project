<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'          => 'Evil Kenieval',
            'email'         => 'e.kenieval@gmail.com',
            'password'      => Hash::make('password'),
            'remember_token'=> str_random(10),
        ]);

        User::create([
            'name'          => 'David Swodhash',
            'email'         => 'd.swodhash@gmail.com',
            'password'      => Hash::make('astronomy'),
            'remember_token'=> str_random(10),
        ]);


    }
}
