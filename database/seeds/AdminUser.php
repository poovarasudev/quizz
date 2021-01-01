<?php

use Illuminate\Database\Seeder;

class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Demo Admin',
            'email' => 'demo.admin@test.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role_id' => 1,
        ]);

        \App\User::create([
            'name' => 'Demo Student',
            'email' => 'demo.student@test.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role_id' => 2,
        ]);

        \App\User::create([
            'name' => 'Abc Admin',
            'email' => 'abc.admin@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role_id' => 1,
        ]);

        \App\User::create([
            'name' => 'Abc Student',
            'email' => 'abc.student@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role_id' => 2,
        ]);
    }
}
