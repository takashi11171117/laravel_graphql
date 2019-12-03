<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class)->create()->id,
        'title' => $faker->name,
        'content' => $faker->name,
    ];
});
