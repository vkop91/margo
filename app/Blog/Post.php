<?php

namespace App\Blog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blog.posts';

    /**
     * Post author.
     */
    public function author()
    {
        return $this->hasOne('App\User', 'author_id');
    }

    /**
     * Post images.
     */
    public function images()
    {
        return $this->hasMany('App\Blog\Image');
    }

    /**
     * Post tags.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Blog\Tag');
    }

    /**
     * Post comments.
     */
    public function comments()
    {
        return $this->hasMany('App\Blog\Comment');
    }
}
