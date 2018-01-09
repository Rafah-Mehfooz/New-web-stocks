<?php

use Illuminate\Database\Seeder;

class Attockcement extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Attockcement::class, 1)->create();
    }
}
