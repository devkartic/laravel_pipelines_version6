<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class Post extends Model
{
    public static function allPosts(){
        $posts = app(Pipeline::class)
                ->send(Post::query())
                ->through([
                    \App\queryFilters\Active::class,
                    \App\queryFilters\Sort::class,
                    \App\queryFilters\MaxCount::class,
                ])
                ->thenReturn()->paginate(5);
        return $posts;
    }
}
