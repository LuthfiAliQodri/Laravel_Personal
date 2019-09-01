<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    
    protected $table = 'tags';
    protected $fillable = ['id','nama_tags'];

    public function blogs()
    {
        return $this->belongsToMany('App\Blog');
    }

}
