<?php

use Faker\Generator as Faker;

$factory->define(App\Bestwaycement::class, function (Faker $faker) {
    return [
        'categoryId'=>'1',
    	    'categoryName'=>'Cements',
    	    'symbol'=>'BWC',
        	'shareName' => 'Bestway Cements',
            'LDCP' => rand(),
			'OPEN' => rand(),
            'HIGH' => rand(),
            'LOW' => rand(),
            'CURRENT' => rand(),
            'CHANGE' => rand(),
            'VOLUME' => rand(),
            
    ];
});
