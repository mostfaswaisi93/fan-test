<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Roles')->insert([
            'type' => 'admin',
        ]);

        DB::table('Roles')->insert([
            'type' => 'doctor',
        ]);

        DB::table('Roles')->insert([
            'type' => 'secretary',
        ]);


    }
}
