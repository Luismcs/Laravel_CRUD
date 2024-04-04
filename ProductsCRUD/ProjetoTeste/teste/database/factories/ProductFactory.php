<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name,
        'details'=>$faker->text,
        'category_id'=>rand(1,4),
        'project_id'=>rand(1,20),
        'created_at'=>now(),
        'updated_at'=>now()
    ];
});
