<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komen extends Model
{
    protected $table = 'comments';
    protected $fillable = ['post_id','user_id','message'];

    public function blog()
    {
        return $this->belongsTo('App\Blog');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
