<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
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
            DB::table('settings')->insert([
                'USER_ID' =>  $faker->randomDigit ,
                'ITEM_ID' =>  $faker->randomDigit,
                'ROW'     =>  $faker->randomDigit,
                'COL'     =>  $faker->randomDigit,
                'SIZEX'   =>  $faker->randomDigit,
                'SIZEY'   =>  $faker->randomDigit,
            ]);
        }
    }
}
