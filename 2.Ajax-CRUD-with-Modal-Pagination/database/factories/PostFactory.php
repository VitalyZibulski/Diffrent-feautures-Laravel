<?php

use Faker\Generator as Faker;
use App\Models\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
		'title' => $faker->name,
		'body' => $faker->text,
    ];
});
