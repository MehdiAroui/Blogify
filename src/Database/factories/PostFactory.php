<?php

use Faker\Generator as Faker;

$factory->define(\Blogify\Post::class, function (Faker $faker){
    return [
        'title' => $faker->title,
        'slug' => $faker->unique()->slug,
        'content' => $faker->paragraph,
        'excerpt' => $faker->paragraph,
        'status' => $faker->word,
        'like_count' => $faker->randomNumber(2),
        'enable_comment' => $faker->boolean,
        'comment_count' => $faker->randomNumber(2),
        'enable_comment' => $faker->boolean,
        'publish_date' => $faker->date(),
    ];
});