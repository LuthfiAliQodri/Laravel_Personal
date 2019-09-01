<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    protected $table = 'categories';
    protected $fillable = ['id','qty'];

    public function blog()
    {
        return $this->hasMany('App\Blog');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

