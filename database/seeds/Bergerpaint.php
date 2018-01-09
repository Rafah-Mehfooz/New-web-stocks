<?php

use Illuminate\Database\Seeder;

class Bergerpaint extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            factory(App\Bergerpaint::class, 1)->create();

    }
}
