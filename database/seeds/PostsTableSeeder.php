<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class)->create([
            'slug' => ['en' => 'first', 'br' => 'primeiro'],
            'name' => ['en' => 'First', 'br' => 'Primeiro'],
            'published_at' => now()->subDays(7),
        ]);

        factory(Post::class)->create([
            'slug' => ['en' => 'second', 'br' => 'segundo'],
            'name' => ['en' => 'Second', 'br' => 'Segundo'],
            'published_at' => now(),
        ]);
    }
}
