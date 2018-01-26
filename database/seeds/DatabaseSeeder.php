<?php

use Illuminate\Database\Eloquent\Model;
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

         //$this->call(UsersTableSeeder::class);
        //Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ConnectRelationshipsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(EvtlistSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(JstreeSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
