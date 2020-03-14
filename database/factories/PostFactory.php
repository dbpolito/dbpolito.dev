<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Factory as FakerFactory;
use Faker\Generator as Faker;

$fakerBr = FakerFactory::create('pt_BR');

$factory->define(Post::class, function (Faker $faker) use ($fakerBr) {
    return [
        'slug' => ['en' => $faker->slug(2), 'pt_BR' => $fakerBr->slug(2)],
        'name' => ['en' => $faker->sentence(2), 'pt_BR' => $fakerBr->sentence(2)],
        'description' => ['en' => $faker->text(200), 'pt_BR' => $fakerBr->text(200)],
        'content' => ['en' => $faker->randomHtml(), 'pt_BR' => $fakerBr->randomHtml()],
        'tags' => [$faker->slug(1)],
        'published_at' => $faker->dateTime(),
    ];
});
