<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model 
{

    protected $table = 'movies';
    public $timestamps = true;
    protected $fillable = array('name');

    public function actors()
    {
        return $this->belongsToMany('App\Actor');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}