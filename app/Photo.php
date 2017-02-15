<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //

    protected $directory = '/images/';

    protected $fillable = ['photo','user_id'];

    public function getPhotoAttribute($photo){
        return $this->directory . $photo;
    }


}
