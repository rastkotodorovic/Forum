<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Reply;
use App\Category;
use App\Thread;
use App\User;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph,
        'user_id' => function() {
            return factory(User::class)->create()->id;
        },
        'thread_id' => function() {
            return factory(Thread::class)->create()->id;
        },
    ];
});
