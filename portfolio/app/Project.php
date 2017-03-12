<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Project extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_project');
    }

    public function slideimages()
    {
        return $this->hasMany(Slideimage::class);
    }
}
