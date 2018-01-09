<?php

use Illuminate\Database\Seeder;

class DataAgro extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            factory(App\Dataagro::class, 1)->create();

    }
}
