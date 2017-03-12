<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;

class Category extends Model
{
    public function projects()
    {
        return $this->belongsToMany('App\Project', 'category_project');
    }
}
