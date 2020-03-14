<?php

namespace App\Nova;

use App\Post as PostModel;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Spatie\NovaTranslatable\Translatable;
use Spatie\TagsField\Tags;

class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = PostModel::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'slug',
        'name',
        'slug',
        'description',
        'content',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Translatable::make([
                Text::make('Slug')->rules('required', 'unique_translation:posts,slug,{{resourceId}}'),
                Text::make('Name')->rules('required'),
                Textarea::make('Description')->rules('required'),
                Trix::make('Content')->rules('required')->withFiles('public'),
            ]),

            // workaround for trix to work on translations
            Trix::make('translations_content_en')->withFiles('public')->hideWhenCreating()->hideWhenUpdating()->hideFromDetail(),
            Trix::make('translations_content_br')->withFiles('public')->hideWhenCreating()->hideWhenUpdating()->hideFromDetail(),

            Tags::make('Tags'),

            DateTime::make('Published At'),
        ];
    }
}
