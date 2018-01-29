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
        DB::table('items')->truncate();

        $faker = Faker\Factory::create();
        for($i = 0; $i <10; $i++){
            DB::table('items')->insert([
                'name'=> $faker->name
            ]);
        }
    }
}
