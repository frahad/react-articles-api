<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'author',
        'thumbnail',
        'content',
    ];

    /**
     * Generates an unique identifier for the article.
     *
     * @param  string  $value
     * @return void
     */
    public function setTitleAttribute(string $value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
