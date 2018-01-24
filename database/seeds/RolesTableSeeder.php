<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (Role::where('Name', '=', 'Admin')->first() === null) {
            $adminRole = Role::create([
                'name'        => 'Admin',
                'display_name'        => 'admin',
                'description' => 'Admin Role',
            ]);
        }

        if (Role::where('Name', '=', 'User')->first() === null) {
            $userRole = Role::create([
                'name'        => 'User',
                'display_name'        => 'user',
                'description' => 'User Role',
            ]);
        }

        if (Role::where('Name', '=', 'Unverified')->first() === null) {
            $userRole = Role::create([
                'name'        => 'Unverified',
                'display_name'        => 'unverified',
                'description' => 'Unverified Role',
            ]);
        }
    }
}
