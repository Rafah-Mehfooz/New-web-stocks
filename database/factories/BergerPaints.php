<?php

use Faker\Generator as Faker;

$factory->define(App\Bergerpaint::class, function (Faker $faker) {
    return [
        'categoryId'=>'2',
    	    'categoryName'=>'Chemicals',
    	    'symbol'=>'BP',
        	'shareName' => 'Berger Paints',
            'LDCP' => rand(),
			'OPEN' => rand(),
            'HIGH' => rand(),
            'LOW' => rand(),
            'CURRENT' => rand(),
            'CHANGE' => rand(),
            'VOLUME' => rand(),
    ];
});