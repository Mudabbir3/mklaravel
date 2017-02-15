<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $fillable = ['name','genre_id','photo_id'];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function genre(){
        return $this->belongsTo('App\Genre');
    }
}
