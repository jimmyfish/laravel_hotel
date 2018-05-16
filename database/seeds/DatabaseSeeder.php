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
                'password' => '$2y$10$IFKWjY8xe7GbSYJQ8Ei1wekTxYRqVRQgB/ryuZf60wrcxTY1NbjxK',
                'remember_token' => str_random(10),
                'roles' => 0
            ],
            [
                'username' => "dito",
                'email' => "dito@tuta.io",
                'name' => "Dito Laksono",
                'password' => '$2y$10$IFKWjY8xe7GbSYJQ8Ei1wekTxYRqVRQgB/ryuZf60wrcxTY1NbjxK',
                'remember_token' => str_random(10),
                'roles' => 1
            ]
        ];

        DB::table('users')->insert($user);
        
        factory(App\HotelSetting::class, 1)->create();
    }
}
