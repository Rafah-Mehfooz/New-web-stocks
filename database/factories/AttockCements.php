<?php

use Faker\Generator as Faker;
    
    $factory->define(App\Attockcement::class, function (Faker $faker) {
    return [
    	    'categoryId'=>'1',
    	    'categoryName'=>'Cements',
    	    'symbol'=>'AC',
        	'shareName' => 'Attock Cements',
            'LDCP' => rand(),
			'OPEN' => rand(),
            'HIGH' => rand(),
            'LOW' => rand(),
            'CURRENT' => rand(),
            'CHANGE' => rand(),
            'VOLUME' => rand(),
            
    ];
});
