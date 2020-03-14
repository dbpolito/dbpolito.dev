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
            'slug' => ['en' => 'first', 'pt_BR' => 'primeiro'],
            'name' => ['en' => 'First', 'pt_BR' => 'Primeiro'],
            'published_at' => now()->subDays(7),
        ]);



        factory(Post::class)->create([
            'slug' => ['en' => 'second', 'pt_BR' => 'segundo'],
            'name' => ['en' => 'Second', 'pt_BR' => 'Segundo'],
            'published_at' => now(),
        ]);
    }
}
