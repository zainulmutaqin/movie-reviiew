<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'content', 'category_id', 'slug', 'banner'];
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
