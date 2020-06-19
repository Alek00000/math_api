<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $primaryKey = 'photo_id';
    public function photo(){
        return $this->belongsTo(Photo::class);
    }
}
