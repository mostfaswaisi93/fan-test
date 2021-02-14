<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(DoctorsSeeder::class);
        $this->call(PrescriptionSeeder::class);
        $this->call(OperatienSeeder::class);
    }
}
