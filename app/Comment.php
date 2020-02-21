<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model 
{

    protected $table = 'comments';
    public $timestamps = true;
    protected $fillable = array('client_id', 'movie_id', 'comment');

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }

}