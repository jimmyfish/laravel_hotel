<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => "admin",
                'email' => "admin@gmail.com",
                'name' => "Administrator",
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
                'remember_token' => str_random(10),
            ],
            [
                'username' => "dito",
                'email' => "dito@tuta.io",
                'name' => "Dito Laksono",
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
                'remember_token' => str_random(10),
            ]
        ];

        DB::table('users')->insert($user);
    }
}
