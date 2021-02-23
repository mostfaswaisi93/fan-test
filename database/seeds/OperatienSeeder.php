<?php

use Illuminate\Database\Seeder;

class OperatienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Operation::class, 5)->create();
    }
}
