<?php

use Faker\Generator as Faker;

$factory->define(App\Dataagro::class, function (Faker $faker) {
    return [
        'categoryId'=>'2',
    	    'categoryName'=>'Chemicals',
    	    'symbol'=>'DC',
        	'shareName' => 'Data Agro',
            'LDCP' => rand(),
			'OPEN' => rand(),
            'HIGH' => rand(),
            'LOW' => rand(),
            'CURRENT' => rand(),
            'CHANGE' => rand(),
            'VOLUME' => rand(),
    ];
});
