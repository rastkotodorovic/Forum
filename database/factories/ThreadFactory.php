<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Model;
use App\Thread;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Thread::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'user_id' => function() {
            return factory(User::class)->create()->id;
        },
        'category_id' => function() {
            return factory(Category::class)->create()->id;
        },
    ];
});
