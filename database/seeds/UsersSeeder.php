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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role_id' => 1,
            'password' => bcrypt('123456789'),
        ]);

        DB::table('users')->insert([
            'name' => 'secretary',
            'email' => 'secretary@gmail.com',
            'role_id' => 3,
            'password' => bcrypt('123456789'),
        ]);

        DB::table('users')->insert([
            'name' => 'doctor',
            'email' => 'doctor@gmail.com',
            'role_id' => 2,
            'password' => bcrypt('123456789'),
        ]);
    }
}
