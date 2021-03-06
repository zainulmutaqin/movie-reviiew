<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'slug'];
    public function article(){
        return $this->hasMany('App\Article');
    }
}
