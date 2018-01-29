<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ITEMS')->truncate();

        $faker = Faker\Factory::create();

        for($i = 0; $i <17; $i++){
            DB::table('items')->insert([
                'name'=> $faker->name
            ]);

        }
    }
}
