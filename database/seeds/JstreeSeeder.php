<?php

use Illuminate\Database\Seeder;

class JstreeSeeder extends Seeder
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
            DB::table('treeviews')->insert([
                'id' =>  $faker->randomDigit,
                'NAME' => $faker-> firstNameMale,
                'PARENT_ID' =>  $faker->randomDigit,
                'TEXT' => $faker->realText($faker->numberBetween(10,20)),
            ]);
        }
    }
}
