<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
/**
 *
 * Category hasMany Article
 * 
 */
 protected $guarded = [];
 public function articles(){
     return $this->hasMany(Article::class);
 }
}
