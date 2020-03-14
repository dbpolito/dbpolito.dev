<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Factory as FakerFactory;
use Faker\Generator as Faker;

$fakerBr = FakerFactory::create('pt_BR');

$factory->define(Post::class, function (Faker $faker) use ($fakerBr) {
    return [
        'slug' => ['en' => $faker->slug(2), 'br' => $fakerBr->slug(2)],
        'name' => ['en' => $faker->sentence(2), 'br' => $fakerBr->sentence(2)],
        'description' => ['en' => $faker->text(200), 'br' => $fakerBr->text(200)],
        'content' => ['en' => $faker->randomHtml(), 'br' => $fakerBr->randomHtml()],
        'published_at' => $faker->dateTime(),
    ];
});
