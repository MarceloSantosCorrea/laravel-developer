<?php

use Illuminate\Database\Seeder;
use Laravel\Passport\Client;

class PassportClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'name'                   => \Config::get('app.name').' Personal Access Client',
            'user_id'                => 1,
            'secret'                 => 'VYLE4LisKqJQBQQJeO76M9DxldMqeodgnrWOQ8Ku',
            'redirect'               => 'http://localhost',
            'personal_access_client' => '1',
            'password_client'        => '0',
            'revoked'                => '0',
        ]);

        Client::create([
            'name'                   => \Config::get('app.name').' Password Grant Client',
            'user_id'                => 1,
            'secret'                 => 'MVMVkZ3QpirQQaIrS3lpY4m9mgQ336oXWSyYMmDL',
            'redirect'               => 'http://localhost',
            'personal_access_client' => '0',
            'password_client'        => '1',
            'revoked'                => '0',
        ]);
    }
}
