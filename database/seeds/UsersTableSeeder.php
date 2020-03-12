<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Daniel Polito',
            'email' => 'danielbpolito@gmail.com',
            'password' => Hash::make('qwe123'),
        ]);
    }
}