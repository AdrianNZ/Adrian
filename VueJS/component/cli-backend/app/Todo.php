<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Todo extends Model
{
//    protected $dateFormat = '20'.'y-m-d';

//    public function setDateAttribute($value)
//    {
//        $this->attributes['date'] = (new Carbon($value))->format('20'.'y-m-d');
//    }

    public function getDateAttribute($value)
    {
        return Carbon::parse($value)->format('20'.'y-m-d');
    }

    protected $hidden = [
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
