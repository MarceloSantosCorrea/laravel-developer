<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class)->create([
            'firstname' => 'Marcelo',
            'lastname'  => 'Corrêa',
            'email'     => 'marcelocorrea229@gmail.com',
            'is_admin'  => true,
        ]);

        factory(\App\Models\User::class)->create([
            'email' => 'si.marcelocorrea@gmail.com',
        ]);
    }
}
