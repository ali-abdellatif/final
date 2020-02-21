<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor_movie extends Model 
{

    protected $table = 'actor_movie';
    public $timestamps = true;
    protected $fillable = array('actor_id', 'movie_id');

}