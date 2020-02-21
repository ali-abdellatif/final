<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model 
{

    protected $table = 'actors';
    public $timestamps = true;
    protected $fillable = array('name');

    public function movies()
    {
        return $this->belongsToMany('App\Movie');
    }

}