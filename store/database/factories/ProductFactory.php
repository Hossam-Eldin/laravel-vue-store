<?php

use Faker\Generator as Faker;

$factory->define(App\Products::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->sentence,
        'slug' => str_slug($name),
        'image' =>$faker->randomElement(['https://images.pexels.com/photos/935785/pexels-photo-935785.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
                    'https://images.pexels.com/photos/1020315/pexels-photo-1020315.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
                    'https://images.pexels.com/photos/161154/stained-glass-spiral-circle-pattern-161154.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500']),
        'price' => $faker->randomDigit,
       'categories' =>$faker->randomElement(['Electronics', 'Books', 'Games', 'Gifts']),   
    ];
});
