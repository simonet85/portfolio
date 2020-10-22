<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /*
     * Article belongsTo Category
     * 
     */
    protected $guarded = [];
    public function categories()
    {
        return $this->hasMany(Category::class, 'article_categories');
    }
}


