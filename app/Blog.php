<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $table = 'blogs';
    protected $fillable = ['foto','judul','deskripsi','penulis','qty'];

    public function categorie()
    {
        return $this->belongsTo('App\Categorie', 'qty');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tags');
    }

}
