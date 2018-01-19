<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i =0; $i<=20; $i++){
            DB::table('users')->insert([
                'name' => str_random(10),
                'email' => $faker->unique()->email,
                'password' => bcrypt('secret'),
            ]);
        }

    }
}
