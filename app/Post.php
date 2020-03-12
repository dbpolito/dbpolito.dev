<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasTags, HasTranslations;

    public $translatable = ['slug', 'name', 'description', 'content'];

    protected $casts = [
        'published_at' => 'datetime',
    ];
}
