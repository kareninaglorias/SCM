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
        Role::truncate();

        Role::create(['name' => 'perekayasa']);
        Role::create(['name' => 'pabrik']);
        Role::create(['name' => 'outlet']);
    }
}
